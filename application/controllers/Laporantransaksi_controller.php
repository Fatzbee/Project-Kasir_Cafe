<?php
defined('BASEPATH') or exit('No direct scipt access allowes');
/**
 * 
 */
class Laporantransaksi_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == NULL) {
            redirect('Login_controller', 'refresh');
        }
        $this->load->model('Detailtransaksi_model');
        $this->load->helper('url');
        $this->load->helper('form');
    }
    public function index()
    {
        $content = $this->cart->contents();
        if ($this->input->post('filter') == 'harian') {
            $data['LaporanTransaksi'] = $this->Detailtransaksi_model->getLaporanHarian();
            $data['Request'] = 'Harian';
        } else if ($this->input->post('filter') == 'bulanan') {
            $data['LaporanTransaksi'] = $this->Detailtransaksi_model->getLaporanBulanan();
            $data['Request'] = 'Bulanan';
        } else if ($this->input->post('filter') == 'tahunan') {
            $data['LaporanTransaksi'] = $this->Detailtransaksi_model->getLaporanTahunan();
            $data['Request'] = 'Tahunan';
        } else {
            $data['LaporanTransaksi'] = $this->Detailtransaksi_model->getLaporan();
            $data['Request'] = '';
        }
        $nav['title'] = "Report Product";
        $this->load->view('navbar/index_navbar.php', $nav);
        $this->load->view('laporanTransaksi.php', $data);
        $this->load->view('cart/index_cart.php', array('content' => $content));
    }
}
?>