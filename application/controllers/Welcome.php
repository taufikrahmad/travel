<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
       parent::__construct();
       $this->load->model('md_paket', 'paket');
       $this->load->model('md_itinerary', 'itinerary');
       $this->load->model('md_gallery', 'gallery');
       $this->load->model('md_item', 'item');
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
		$this->load->helper('url');
		
		$data = array();
		
		// Mengambil data group //
		$data["group"] = $this->paket->get_menu_group();
		
		// Mengambil data pake berdasarkan group //
		$data["packages"] = $this->paket->get_packages_thumbnail();
		
		// data Cart //
		$data["CartItems"] = $this->cart->total_items();
		
		
		$this->load->view('front_home',$data);
		
	}
}
