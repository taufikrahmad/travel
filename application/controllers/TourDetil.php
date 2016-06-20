<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TourDetil extends CI_Controller {
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
		//echo $this->uri->segment(3);;
		
		$this->load->view('TourDetil_V');
	}
	
	public function Package($id){
		$this->load->helper('url');
		$data = array();
		$data["itinerary"] = $this->itinerary->get_itinerary_by_paket($id);
		$data["galery"] = $this->gallery->get_gallery_by_paket($id);
		$data["items"] = $this->item->get_item_by_paket($id);
		$data["package"] = $this->paket->get_paket_by_id($id);
		$data["id_paket"] = $data["package"]->id;
		$data["nama_paket"] = $data["package"]->nama_paket;
		$data["price"] = $data["package"]->price;
		$data["currency"] = $data["package"]->currency;
		$data["desc"] = $data["package"]->description;
		
		/* Paket Price  */
		$data["Matrix_prices"] = $this->paket->get_harga_paket_by_id($id);
		/* ============ */
		
		$data["CartItems"] = $this->cart->total_items();
		$this->load->view('TourDetil_V',$data);
	}
	
}
