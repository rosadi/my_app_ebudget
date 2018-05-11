<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model(array('m_account', 'm_category', 'm_transaksi'));
    }

    public function transaksi_income(){
        $this->form_validation->set_rules('income', 'Income', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # code...
            $data['account']  = $this->m_account->get_account();
            $data['category'] = $this->m_category->get_category_income();
            $data['data_transaksi'] = $this->m_transaksi->get_transaksi_income();
            $data['data_total_transaksi'] = $this->m_transaksi->get_total_income();
            $this->template->load('themes/template', 'transaksi/v_transaksi_income', $data);
        }else{
            $this->m_transaksi->set_transaksi_income();
            $this->session->set_flashdata('transaksi_income', 'Transaksi berhasil di buat!');
            redirect('transaksi/transaksi_income');
        }
    }

    public function transaksi_income_delete($t_detail_id){
        $this->m_transaksi->delete_transaksi($t_detail_id);
        $this->session->set_flashdata('transaksi_delete', 'Item Transaksi di hapus!');
        redirect('transaksi/transaksi_income');
    }

    # 1. selesai transaksi ini di pakai di income
    # 2. selesai transaksi ini di pake di expanse 
    public function selesai_transaksi(){
        date_default_timezone_set("Asia/Jakarta");
        $tanggal_transaksi = date('Y-m-d');

        $data = array('tanggal_transaksi' => $tanggal_transaksi);

        $this->m_transaksi->selesai_transaksi($data);
        $this->session->set_flashdata('selesai_transaksi', 'Transaksi telah selesai dan berhasil!');
        redirect('transaksi/transaksi_income');
   }

   public function data_all_income(){
        $data['data_transaksi_all'] = $this->m_transaksi->get_data_all_income();
        $this->template->load('themes/template', 'transaksi/v_all_transaksi_income', $data);
   }

   public function data_all_expanse(){
        $data['data_transaksi_all'] = $this->m_transaksi->get_data_all_expanse();
        $this->template->load('themes/template', 'transaksi/v_all_transaksi_expanse', $data);
   }

   /*
   ===========================================DI BAWAH EXPANSE======================================
    */

    public function transaksi_expanse(){
        $this->form_validation->set_rules('expanse', 'Expanse', 'required');
        $this->form_validation->set_rules('qty', 'Qty / Quantity', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ( $this->form_validation->run() === FALSE ) {
                # code...
            $data['account']                   = $this->m_account->get_account();
            $data['category']                  = $this->m_category->get_category_expanse();
            $data['data_transaksi']            = $this->m_transaksi->get_transaksi_expanse();
            $data['data_total_transaksi']      = $this->m_transaksi->get_total_expanse();
            $this->template->load('themes/template', 'transaksi/v_transaksi_expanse', $data);
        }else{
            $this->m_transaksi->set_transaksi_expanse();
            $this->session->set_flashdata('transaksi_expanse', 'Transaksi expanse berhasil di buat!');
            redirect('transaksi/transaksi_expanse');
        }
    }

    public function transaksi_expanse_delete($t_detail_id){
        $this->m_transaksi->delete_transaksi($t_detail_id);
        $this->session->set_flashdata('transaksi_delete', 'Item Transaksi di hapus!');
        redirect('transaksi/transaksi_expanse');
    }

    ////////////
    // REPORT //
    ////////////

    public function laporan_excel_income(){
        header("Content-type=application/vnd.ms-excel");
        header("Content-disposition:attecment;filename=laporan_transaksi_income.xls");
        $data['data_excel'] = $this->m_transaksi->get_data_all_income();
        $this->load->view('transaksi/v_transaksi_income_excel', $data);
    }

    public function laporan_excel_expanse(){
        header("Content-type=application/vnd.ms-excel");
        header("Content-disposition:attecment;filename=laporan_transaksi_expanse.xls");
        $data['data_excel'] = $this->m_transaksi->get_data_all_expanse();
        $this->load->view('transaksi/v_transaksi_expanse_excel', $data);
    }
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */
error_reporting(0);