<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
       parent::__construct();
       $this->load->model('md_user', 'user');
   }

	public function index()
	{
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$data['title'] = 'Welcome';
			$data['view'] = 'view_home';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function login(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$result = $this->user->login($data);
		if($result){
			$data['name'] = $result->name;
			$data['status'] = 1;
			$this->session->set_userdata($data);
			$data['message'] = 'Selamat datang '.$data['name'];
			$data['title'] = 'Welcome';
			$data['view'] = 'view_home';
			$this->load->view('template', $data);

		}else{
			$data['message'] = "Username atau password salah";
			$this->load->view('view_login', $data);
		}
	}

	public function logout(){

		$this->session->sess_destroy();
    	redirect('home');
	}
}
