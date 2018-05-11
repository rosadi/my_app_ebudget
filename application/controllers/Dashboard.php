<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('m_transaksi');

        # =================================================
        # kita non aktifkan terlebih dahulu code di bawah
        #$this->load->helper('user_agent');
        #$this->load->library('user_agent');
        #set_user_agent();
        # =================================================
    }

    public function page_dashboard(){
        # menampilkan tanggal data awal bulan dan akhir bulan
        date_default_timezone_set("Asia/Jakarta");
        $hari_ini = date("Y-m-d");
        $tgl_pertama = date('Y-m-01', strtotime($hari_ini));
        $tgl_terakhir = date('Y-m-t', strtotime($hari_ini));
        # controller dashboard mengambil data di m_transaksi
        # menampilkan data income dan expanse
        $data['data_income']  = $this->m_transaksi->get_income_report_1($tgl_pertama, $tgl_terakhir);
        $data['data_expanse'] = $this->m_transaksi->get_expanse_report_1($tgl_pertama, $tgl_terakhir);

        # menampilkan selisih income - expanse
        $data['total_sel_income']  = $this->m_transaksi->report_sel_income();
        $data['total_sel_expanse'] = $this->m_transaksi->report_sel_expanse();
        $data['total_sel_inc_exp'] = $this->m_transaksi->transaksi_selesih_inc_exp();
        $this->template->load('themes/template', 'v_dashboard', $data);
    }

    public function get_income_id($id_transaksi){
        $data['data_income_id'] = $this->m_transaksi->get_inc_id($id_transaksi);
        $this->template->load('themes/template', 'transaksi/v_report_trx_detail_income', $data);
    }

    public function get_expanse_id($id_transaksi){
        $data['data_expanse_id'] = $this->m_transaksi->get_exp_id($id_transaksi);
        $this->template->load('themes/template', 'transaksi/v_report_trx_detail_expanse', $data);
    }

    public function sample_page(){
        $this->template->load('themes/template', 'themes/v_sample');
    }

    public function test(){
        $this->template->load('themes/template', 'v_test');
    }
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
error_reporting(0);