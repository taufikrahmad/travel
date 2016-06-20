<?php
class Md_itinerary extends CI_Model {

	public function get_all_itinerary(){
		$this->db->select('itinerary.*');
		$this->db->from('itinerary');
		$this->db->order_by('itinerary.id', 'desc');
		$result = $this->db->get();

		return $result->result();
	}

	public function insert_itinerary($data){

		$this->db->insert('itinerary', $data);
	}

	public function update_itinerary($id, $data){
		$this->db->where('id', $id);
		$this->db->update('itinerary', $data);
	}

	public function get_itinerary_by_id($id){
		$this->db->from('itinerary');
		$this->db->where('id', $id);
		$result = $this->db->get();
		$result = $result->result();

		return $result[0];
	}

	public function get_itinerary_by_paket($id_paket){
		$this->db->from('itinerary');
		$this->db->where('id_paket', $id_paket);
		$result = $this->db->get();
		$result = $result->result();

		return $result;	
	}

	public function delete_itinerary($id){
		$this->db->delete('itinerary', array('id' => $id));
	}

	public function get_menu_group(){
		$result = $this->db->get('menu_group')->result();
		return $result;
	}
}