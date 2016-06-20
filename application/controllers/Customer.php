<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	function __construct() {
       parent::__construct();
       $this->load->model('md_customer', 'cust');
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
		$data = array();
		$data["CartItems"] = $this->cart->total_items();
		$data["message"] = "";
		$this->load->view('front_customer_v',$data);
	}
	
	public function Sign()
	{
		if($_POST['submit'] == "Register"){
			$data = array(
				'Customer_Name' => $this->input->post('name'),
				'Customer_Username' => $this->input->post('uname1'),
				'Customer_Email' => $this->input->post('email'),
				'password' => md5($this->input->post('reg-pass'))
			);
			$result = $this->cust->insert_cust($data);
			$num_inserts = $this->db->affected_rows();
			if($num_inserts > 0){
				$result = $this->cust->login($data);
				$data['CustomerUserName'] = $result->Customer_Username;
				$data['CustomerLogin'] = 1;
				$data['CustomerID'] = $result->ID_Customer;;
				$this->session->set_userdata($data);
				redirect('');
			}else{
				$data = array();
				$data["CartItems"] = $this->cart->total_items();
				$data["message"] = "Failed to Sign Up";
				if(get_cookie('PrevPage') != null && get_cookie('PrevPage') != ""){
					$PrevPage = get_cookie('PrevPage');
					delete_cookie('PrevPage'); 
					redirect($PrevPage);
				}else{
					$this->load->view('front_customer_v',$data);
				}
			}
		}else{
			//echo 'Sign in';
			$data = array(
				'Customer_Username' => $this->input->post('uname'),
				'Customer_Email' => $this->input->post('uname'),
				'password' => md5($this->input->post('pass'))
			);
			$result = $this->cust->login($data);
			if($result){
				$data['CustomerUserName'] = $result->Customer_Username;
				$data['CustomerLogin'] = 1;
				$data['CustomerID'] = $result->ID_Customer;;
				$this->session->set_userdata($data);
				
				redirect('');
			}else{
				$data['message'] = "Username atau password salah";
				$data["CartItems"] = $this->cart->total_items();
				$this->load->view('front_customer_v', $data);
			}
		}
	}
	
}
