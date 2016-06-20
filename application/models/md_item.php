<?php
class Md_item extends CI_Model {

	public function get_all_item(){
		$this->db->select('item.*');
		$this->db->from('item');
		$this->db->order_by('item.id', 'desc');
		$result = $this->db->get();

		return $result->result();
	}

	public function insert_item($data){

		$this->db->insert('item', $data);
	}

	public function update_item($id, $data){
		$this->db->where('id', $id);
		$this->db->update('item', $data);
	}

	public function get_item_by_id($id){
		$this->db->from('item');
		$this->db->where('id', $id);
		$result = $this->db->get();
		$result = $result->result();

		return $result[0];
	}

	public function get_item_by_paket($id_paket){
		$this->db->from('item');
		$this->db->where('id_paket', $id_paket);
		$result = $this->db->get();
		$result = $result->result();

		return $result;	
	}

	public function delete_item($id){
		$this->db->delete('item', array('id' => $id));
	}

	public function get_menu_group(){
		$result = $this->db->get('menu_group')->result();
		return $result;
	}
}