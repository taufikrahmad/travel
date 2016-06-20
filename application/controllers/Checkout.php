<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	function __construct() {
       parent::__construct();
	   set_cookie('PrevPage','Checkout','3600');
       $this->load->model('md_transaksi', 'transaksi');
	   $this->load->model('md_paket', 'paket');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->CustomerLogin==1){
			$this->load->helper('url');
			$data = array();
			$data["CartItems"] = $this->cart->total_items();
			$this->load->view('front_checkout_v',$data); 
		}else{
			redirect('Customer');
		}
	}
	
	public function Confirm(){
		$this->load->helper('url');
		
		$data = array();
		$counter = 0;
		foreach ($this->cart->contents() as $items){
			$data = array(
				'id_paket' => $items['name'],
				'qty_paket' => $items['qty'],
				'customer_id' => $this->session->CustomerID,
				'Booking_date' => date('Y-m-d'),
				'First_Name' => $this->input->post('first_name'),
				'Last_Name' => $this->input->post('last_name'),
				'Email_address' => $this->input->post('email'),
				'Phone' => $this->input->post('phone'),
				'Company' => $this->input->post('company_name'),
				'Address' => $this->input->post('address'),
				'City' => $this->input->post('city'),
				'Coupon_Code' => $this->input->post('coupon'),
				'Comment' => $this->input->post('comment'),
				'Tanggal_transaksi' => date('Y-m-d')
			);
			$result = $this->transaksi->insert_transaksi($data);
			$num_inserts = $this->db->affected_rows();
			if($num_inserts > 0){
				$this->cart->update(array('rowid'=> $items["rowid"],'qty' => 0));
				$counter+=1;
			}
		}
		
		if($counter>0){
			set_cookie('TraScs',true,'3600');
			redirect('');
		}else{
			set_cookie('TraFld',true,'3600');
			redirect('');
		}
		
	}
	
}
