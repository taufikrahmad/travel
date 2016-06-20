<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_catalog extends CI_Controller {
	function __construct() {
       parent::__construct();
       $this->load->model('md_paket', 'paket');
       $this->load->model('md_itinerary', 'itinerary');
       $this->load->model('md_gallery', 'gallery');
       $this->load->model('md_item', 'item');
   }

	public function index($menu_group = FALSE, $country_province = FALSE)
	{
		$this->load->helper('url');
		$data = array();
		$data['catalog'] = $this->paket->get_catalog($menu_group, $country_province);
		$data['CartItems'] = $this->cart->total_items();
		$this->load->view('front_catalog', $data);
	}
}
