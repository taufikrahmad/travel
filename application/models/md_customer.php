<?php
class Md_customer extends CI_Model {

	public function get_all_customer(){
		$this->db->from('customer');
		$this->db->order_by('ID_Customer', 'desc');
		$result = $this->db->get();

		return $result->result();
	}

	public function login($data){
		$this->db->from('Customer');
		$this->db->where('Customer_Username', $data['Customer_Username']);
		$this->db->or_where('Customer_Email', $data['Customer_Email']);
		$this->db->where('password', $data['password']);
		$result = $this->db->get();
		$result =  $result->result();
		if(isset($result[0])){
			return $result[0];
		}else{
			return FALSE;
		}
	}

	public function insert_cust($data){
		$this->db->insert('Customer', $data);
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