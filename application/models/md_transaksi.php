<?php
class Md_transaksi extends CI_Model {

	public function insert_transaksi($data){
		$this->db->insert('transaksi', $data);
	}
	
}