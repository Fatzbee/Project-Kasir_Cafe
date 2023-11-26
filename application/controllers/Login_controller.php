<?php
defined('BASEPATH') or exit('No direct scipt access allowes');
/**
 * 
 */
class Login_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('login', $data);
	}

	public function login()
	{
		$ceklogin = $this->User_model->getUser();


		if ($ceklogin != false) {
			foreach ($ceklogin as $row) {
				$this->session->set_userdata('id_user', $row->id_user);
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('level', $row->level);
				$this->session->set_flashdata('successLogin', 'Login Berhasil, Selamat Datang Kak ' . $row->username);
				return redirect('Index_controller');
			}
		} else {
			$this->session->set_flashdata('errorLogin', 'Username atau Password Salah!');
			redirect('Login_controller');
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect('Login_controller', 'refresh');
	}
}
?>