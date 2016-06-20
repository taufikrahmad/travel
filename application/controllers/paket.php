<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	function __construct() {
       parent::__construct();
       $this->load->model('md_paket', 'paket');
       $this->load->model('md_itinerary', 'itinerary');
       $this->load->model('md_gallery', 'gallery');
       $this->load->model('md_item', 'item');
    }

	public function index($data = FALSE){
		if($this->session->userdata('status')){
			$data['title'] = 'Paket';
			$data['view'] = 'view_paket';
			$data['paket'] = $this->paket->get_all_paket();
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function insert(){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$data['title'] = 'Tambah Paket';
			$data['view'] = 'form_paket';
			$data['option_group'] = $this->paket->get_menu_group();

			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function insert_itinerary($id){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$data['id'] = $id;
			$data['title'] = 'Tambah Itinerary';
			$data['view'] = 'form_itinerary';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function insert_item($id){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$data['id'] = $id;
			$data['title'] = 'Tambah Item';
			$data['view'] = 'form_item';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function insert_gallery($id){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$data['id'] = $id;
			$data['title'] = 'Tambah Gallery';
			$data['view'] = 'form_gallery';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function edit($id, $data=FALSE){
		if($this->session->userdata('status')){
			$result = $this->paket->get_paket_by_id($id);
			$data['id'] = $id;
			$data['nama_paket'] = $result->nama_paket;
			$data['menu_group'] = $result->menu_group;
			$data['country_province'] = $result->country_province;
			$data['description'] = $result->description;
			$data['package'] = $result->package;
			$data['currency'] = $result->currency;
			$data['price'] = $result->price;
			$data['is_active'] = $result->is_active;
			$data['person'] = $result->person;
			$data['option_group'] = $this->paket->get_menu_group();
			$data['option_country_province'] = $this->get_first_sub($data['menu_group'], TRUE);
			$data['itinerary'] = $this->itinerary->get_itinerary_by_paket($id);
			$data['gallery'] = $this->gallery->get_gallery_by_paket($id);
			$data['item'] = $this->item->get_item_by_paket($id);
			$data['harga_paket'] = $this->paket->get_harga_paket($id);
			$data['title'] = 'Edit Paket';
			$data['view'] = 'edit_paket';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function edit_itinerary($id_paket, $id){
		$data = array();
		if($this->session->userdata('status')){
			$result = $this->itinerary->get_itinerary_by_id($id);
			$data['id_paket'] = $id_paket;
			$data['id'] = $id;
			$data['title_itinerary'] = $result->title;
			$data['sequence'] = $result->sequence;
			$data['detail'] = $result->detail;

			$data['title'] = 'Edit Itinerary';
			$data['view'] = 'edit_itinerary';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function edit_item($id_paket, $id){
		$data = array();
		if($this->session->userdata('status')){
			$result = $this->item->get_item_by_id($id);
			$data['id_paket'] = $id_paket;
			$data['id'] = $id;
			$data['item_name'] = $result->item_name;
			$data['status'] = $result->status;

			$data['title'] = 'Edit Item';
			$data['view'] = 'edit_item';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function edit_gallery($id_paket, $id){
		$data = array();
		if($this->session->userdata('status')){
			$result = $this->gallery->get_gallery_by_id($id);
			$data['id_paket'] = $id_paket;
			$data['id'] = $id;
			$data['pict'] = $result->pict;
			$data['title'] = 'Edit gallery';
			$data['view'] = 'edit_gallery';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

		public function do_insert(){
			$data = array();
			$data['message'] = null;
			$data['url']=null;
			if($this->session->userdata('status')){
				$data = array(
					'nama_paket' => $this->input->post('nama_paket'),
					'menu_group' => $this->input->post('menu_group'),
					'country_province' => $this->input->post('first_sub'),
					'price' => $this->input->post('price'),
					'person' => $this->input->post('person'),
					'description' => $this->input->post('description'),
					'package' => $this->input->post('package'),
					'is_active' => $this->input->post('is_active') ? 1 : 0,
					'currency' => $this->input->post('currency'),
					'timestamp' => date('Y-m-d h:i:s')
				);

				$this->paket->insert_paket($data);
				$data['paket'] = $this->paket->get_all_paket();
				$data['message'] = 'paket baru telah ditambahkan';
				$data['title'] = 'Paket';
				$data['view'] = 'view_paket';
				$this->load->view('template', $data);
			}else{
				$this->load->view('view_login', $data);
			}
		}

		public function do_insert_itinerary(){
			$data = array();
			if($this->session->userdata('status')){
				$data = array(
					'title' => $this->input->post('title'),
					'sequence' => $this->input->post('sequence'),
					'detail' => $this->input->post('detail'),
					'id_paket' => $this->input->post('id_paket')
				);

				$this->itinerary->insert_itinerary($data);
				$data['message'] = 'Itinerary baru telah ditambahkan';
				$data['title'] = 'paket';
				$data['view'] = 'view_paket';
				$this->edit($data['id_paket'], $data);
			}else{
				$this->load->view('view_login', $data);
			}
		}

		public function do_insert_item(){
			$data = array();
			if($this->session->userdata('status')){
				$data = array(
					'id_paket' => $this->input->post('id_paket'),
					'item_name' => $this->input->post('item_name'),
					'status' => $this->input->post('status')
				);

				$this->item->insert_item($data);
				$data['message'] = 'Item baru telah ditambahkan';
				$data['title'] = 'paket';
				$data['view'] = 'view_paket';
				$this->edit($data['id_paket'], $data);
			}else{
				$this->load->view('view_login', $data);
			}
		}

		public function do_insert_gallery(){
			$data = array();
			$data['message'] = null;
			$data['url']=null;
			if($this->session->userdata('status')){
				$config['upload_path'] = './assets/img/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				$this->upload->do_upload('pict');
				$upload = $this->upload->data();
				$data = array(
					'id_paket' => $this->input->post('id_paket'),
					'pict' => $upload['file_name']
				);

				$this->gallery->insert_gallery($data);
				unset($data['pict']);
				$data['message'] = 'Foto gallery baru telah ditambahkan';
				$data['title'] = 'Gallery';
				$this->edit($data['id_paket'], $data);
			}else{
				$this->load->view('view_login', $data);
			}
		}

		public function do_edit($id){
			$data = array();
			$data['message'] = null;
			$data['url']=null;
			if($this->session->userdata('status')){
				$data = array(
					'nama_paket' => $this->input->post('nama_paket'),
					'menu_group' => $this->input->post('menu_group'),
					'country_province' => $this->input->post('first_sub'),
					'price' => $this->input->post('price'),
					'person' => $this->input->post('person'),
					'description' => $this->input->post('description'),
					'package' => $this->input->post('package'),
					'is_active' => $this->input->post('is_active') ? 1 : 0,
					'currency' => $this->input->post('currency')
				);

				$this->paket->update_paket($id, $data);
				$data['message'] = 'Paket telah diubah';
				$data['paket'] = $this->paket->get_all_paket();
				$data['title'] = 'Paket';
				$data['view'] = 'view_paket';
				$this->load->view('template', $data);
			}else{
				$this->load->view('view_login', $data);
			}
		}

		public function do_edit_itinerary(){
			$data = array();
			if($this->session->userdata('status')){
				$id = $this->input->post('id');
				$data = array(
					'title' => $this->input->post('title'),
					'sequence' => $this->input->post('sequence'),
					'detail' => $this->input->post('detail')
				);

				$this->itinerary->update_itinerary($id, $data);
				$data['id_paket'] = $this->input->post('id_paket');
				$data['message'] = 'Itinerary telah diubah';
				$data['title'] = 'Paket';
				$data['view'] = 'view_paket';
				$this->edit($data['id_paket'], $data);
			}else{
				$this->load->view('view_login', $data);
			}
		}

		public function do_edit_item(){
			$data = array();
			if($this->session->userdata('status')){
				$id = $this->input->post('id');
				$data = array(
					'item_name' => $this->input->post('item_name'),
					'status' => $this->input->post('status')
				);

				$this->item->update_item($id, $data);
				$data['id_paket'] = $this->input->post('id_paket');
				$data['message'] = 'Item telah diubah';
				$data['title'] = 'Paket';
				$data['view'] = 'view_paket';
				$this->edit($data['id_paket'], $data);
			}else{
				$this->load->view('view_login', $data);
			}
		}

		public function do_edit_gallery(){
			$data = array();
			$data['message'] = null;
			$data['url']=null;
			if($this->session->userdata('status')){
				$current_pict = $this->gallery->get_gallery_by_id($this->input->post('id'))->pict;
				if(file_exists('./assets/img/'.$current_pict)){
					unlink('./assets/img/'.$current_pict);
				}
				$config['upload_path'] = './assets/img/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				$this->upload->do_upload('pict');
				$upload = $this->upload->data();
				$id = $this->input->post('id');
				$data = array(
					'pict' => $upload['file_name']
				);

				$this->gallery->update_gallery($id, $data);
				unset($data['pict']);
				$data['id_paket'] = $this->input->post('id_paket');
				$data['message'] = 'Foto gallery telah diubah';
				$data['title'] = 'Gallery';
				$this->edit($data['id_paket'], $data);
			}else{
				$this->load->view('view_login', $data);
			}
		}

	public function delete($id){
		$this->paket->delete_paket($id);
		$data['message'] = 'paket telah dihapus';
		$data['paket'] = $this->paket->get_all_paket();
		$data['title'] = 'paket';
		$data['view'] = 'view_paket';
		$this->load->view('template', $data);
	}

	public function delete_itinerary($id_paket, $id){
		$this->itinerary->delete_itinerary($id);
		$data['message'] = 'Itinerary telah dihapus';
		$data['title'] = 'paket';
		$data['view'] = 'view_paket';
		$this->edit($id_paket, $data);
	}

	public function delete_item($id_paket, $id){
		$this->item->delete_item($id);
		$data['message'] = 'Item telah dihapus';
		$data['title'] = 'paket';
		$data['view'] = 'view_paket';
		$this->edit($id_paket, $data);
	}

	public function delete_gallery($id_paket, $id){
		$current_pict = $this->gallery->get_gallery_by_id($id)->pict;
		if(file_exists('./assets/img/'.$current_pict)){
			unlink('./assets/img/'.$current_pict);
		}
		$this->gallery->delete_gallery($id);
		$data['message'] = 'Foto gallery telah dihapus';
		$data['title'] = 'paket';
		$data['view'] = 'view_paket';
		$this->edit($id_paket, $data);
	}

	public function get_first_sub($menu_group, $from_edit = FALSE){
		if($menu_group == 'IDN'){
			$result = $this->paket->get_provinsi();
		}elseif($menu_group == 'INT'){
			$result = $this->paket->get_international();
		}elseif($menu_group == 'UMH'){
			$result = $this->paket->get_umroh_haji();
		}else{
			$result = $this->paket->get_special_trip();
		}

		if(!$from_edit){
			echo json_encode($result);
		}else{
			return $result;
		}		
	}
}