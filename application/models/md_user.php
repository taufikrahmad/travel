<?php
class Md_user extends CI_Model {

	public function get_all_user(){
		$this->db->from('user');
		$this->db->order_by('id', 'desc');
		$result = $this->db->get();

		return $result->result();
	}

	public function login($data){
		$this->db->from('user');
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$result = $this->db->get();
		$result =  $result->result();
		if(isset($result[0])){
			return $result[0];
		}else{
			return FALSE;
		}
	}

	public function insert_user($data){
		$this->db->insert('user', $data);
	}

	public function update_user($id, $data){
		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	public function get_user_by_id($id){
		$this->db->from('user');
		$this->db->where('id', $id);
		$result = $this->db->get();
		$result = $result->result();

		return $result[0];
	}

	public function delete_user($id){
		$this->db->delete('user', array('id' => $id));
	}
}