<?php
defined('BASEPATH') or exit('No direct scipt access allowes');
/**
 * 
 */
class Riwayattransaksi_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == NULL) {
            redirect('Login_controller', 'refresh');
        }
        $this->load->model('Transaksi_model');
        $this->load->helper('url');
        $this->load->helper('form');
    }
    public function index()
    {
        $content = $this->cart->contents();
        if ($this->input->post('filter') == 'harian') {
            $data['Transaksi'] = $this->Transaksi_model->getRiwayatHarian();
            $data['Request'] = 'Harian';
        } else if ($this->input->post('filter') == 'bulanan') {
            $data['Transaksi'] = $this->Transaksi_model->getRiwayatBulanan();
            $data['Request'] = 'Bulanan';
        } else if ($this->input->post('filter') == 'tahunan') {
            $data['Transaksi'] = $this->Transaksi_model->getRiwayatTahunan();
            $data['Request'] = 'Tahunan';
        } else {
            $data['Transaksi'] = $this->Transaksi_model->getRiwayat();
            $data['Request'] = '';
        }
        $nav['title'] = "History Transaction";
        $this->load->view('navbar/index_navbar.php', $nav);
        $this->load->view('riwayatTransaksi.php', $data);
        $this->load->view('cart/index_cart.php', array('content' => $content));
    }
}
?>