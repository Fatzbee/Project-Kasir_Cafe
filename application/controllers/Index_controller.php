<?php
defined('BASEPATH') or exit('No direct scipt access allowes');
/**
 * 
 */
class Index_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('Login_controller');
		}
		$this->load->model('Menu_model');
	}

	public function index()
	{
		$content = $this->cart->contents();
		$data['menuTerbaru'] = $this->Menu_model->tampilTerbaru();
		$nav['title'] = "New Product";
		$this->load->view('navbar/index_navbar.php', $nav);
		$this->load->view('index.php', $data);
		$this->load->view('cart/index_cart.php', array('content' => $content));	
	}
}
?>