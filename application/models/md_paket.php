<?php
class Md_paket extends CI_Model {
	
	function __construct() {
       parent::__construct();
   }
	
	public function get_all_paket(){
		$this->db->select('paket.*');
		$this->db->select('menu_group.name group_name');
		$this->db->from('paket');
		$this->db->order_by('paket.id', 'desc');
		$this->db->join('menu_group', 'paket.menu_group=menu_group.code');
		$result = $this->db->get();

		return $result->result();
	}

	public function insert_paket($data){
		$this->db->insert('paket', $data);
		$id_paket = $this->db->insert_id();
		$pricing = $this->input->post('pricing');
		foreach ($pricing as $key => $value) {
			$price = array(
				'id_paket' => $id_paket,
				'hotel' => $value['hotel'],
				'pax_min' => $value['pax_min'],
				'pax_max' => $value['pax_max'],
				'price' => $value['price_pax']
			);

			$this->db->insert('harga_paket', $price);
		}

	}

	public function update_paket($id, $data){
		$this->db->where('id', $id);
		$this->db->update('paket', $data);

		$pricing = $this->input->post('pricing');
		foreach ($pricing as $key => $value) {
			$price = array(
				'hotel' => $value['hotel'],
				'pax_min' => $value['pax_min'],
				'pax_max' => $value['pax_max'],
				'price' => $value['price_pax']
			);
			$this->db->where('id_harga', $value['id_harga']);
			$this->db->update('harga_paket', $price);
		}
	}

	public function get_paket_by_id($id){
		$this->db->from('paket');
		$this->db->where('id', $id);
		$result = $this->db->get();
		$result = $result->result();

		return $result[0];
	}

	public function delete_paket($id){
		$this->db->delete('paket', array('id' => $id));
	}

		public function get_menu_group(){
		$result = $this->db->get('menu_group')->result();
		return $result;
	}

	public function get_provinsi($front = FALSE){
		$this->db->select('id_provinsi id');
		$this->db->select('nama nama');
		$this->db->from('provinsi');
		if($front){
			$this->db->where('active', 1);
		}
		$result = $this->db->get()->result();

		return $result;
	}

	public function get_kota($id_provinsi, $front = FALSE){
		$this->db->select('id_kota id');
		$this->db->select('nama nama');
		$this->db->from('kota');
		if($front){
			$this->db->where('active', 1);
			$this->db->where('id_provinsi', $id_provinsi);
		}
		$result = $this->db->get()->result();

		return $result;
	}

	public function get_international($front = FALSE){
		$this->db->select('country_code id');
		$this->db->select('country_name nama');
		$this->db->from('country');
		if($front){
			$this->db->where('active', 1);
		}
		$result = $this->db->get()->result();

		return $result;
	}

	public function get_umroh_haji(){
		$this->db->select('id_other id');
		$this->db->select('nama_other nama');
		$this->db->from('other');
		$this->db->where('code', 'UMH');
		$result = $this->db->get()->result();

		return $result;
	}

	public function get_special_trip(){
		$this->db->select('id_other id');
		$this->db->select('nama_other nama');
		$this->db->from('other');
		$this->db->where('code', 'SPT');
		$result = $this->db->get()->result();

		return $result;
	}

	public function get_catalog($menu_group = FALSE, $country_province = FALSE){
		$this->db->from('paket p');
		$this->db->join('gallery g', 'g.id_paket = p.id');
		if($menu_group){
			$this->db->where('menu_group', $menu_group);
		}

		if($country_province){
			$this->db->where('country_province', $country_province);
		}

		$this->db->order_by('timestamp', 'desc');
		$this->db->group_by('p.id');

		if(!$menu_group AND !$country_province){
			$this->db->limit(10);
		}

		$result = $this->db->get()->result();

		return $result;
	}
	
	public function get_packages_thumbnail(){
		$query = "select *, "
				. "(select gallery.pict "
				. "from gallery "
				. "where gallery.id_paket = paket.id "
				. "LIMIT 1) as pict "
				. "from paket ";
		
		$result = $this->db->query($query)->result();
		
		return $result;
	}
	
	public function get_harga_paket_by_id($id){
		$this->db->from('harga_paket');
		$this->db->where('id_Paket', $id);
		$result = $this->db->get();
		$result = $result->result();

		return $result;
	}
	
	public function get_harga_paket($id_paket){
		$this->db->from('harga_paket');
		$this->db->where('id_paket', $id_paket);
		$result = $this->db->get()->result();

		return $result;
	}
	
}