<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('m_account');
    }

    public function account(){
        $this->form_validation->set_rules('account_name', 'Account Name', 'required');

        if ( $this->form_validation->run() == FALSE ) {
            # code...
            $data['data_account'] = $this->m_account->get_account();
            $this->template->load('themes/template', 'account/v_account', $data);    
        }else{
            $this->m_account->set_account();
            $this->session->set_flashdata('account_input', 'Account berhasil di buat!');
            redirect('account/account');
        }
        
    }

    public function edit_account($id_account = FALSE){
         if ( $id_account == NULL ) {
             # code...
             # pindah halaman apabila url id di hapus
            redirect('account/account');
         }else{
            # apabila id_ di url ada maka tetap di halaman 
            $this->form_validation->set_rules('account_name', 'Account Name', 'required');

            if ( $this->form_validation->run() == FALSE ) {
            # code...
                $data['data_account'] = $this->m_account->get_account();
                $data['data_account_id'] = $this->m_account->get_account_id($id_account);
                $this->template->load('themes/template', 'account/v_account_edit', $data);   
            }else{
                $this->m_account->update_account_id($id_account);
                $this->session->set_flashdata('account_update', 'Nama Account berhasil di update!');
                redirect('account/account');
            }
         }
    }

    public function delete_account($id_account = FALSE){
        if ( $id_account == NULL ) {
            # code...
            redirect('account/account');
        }else{
            $this->session->set_flashdata('account_delete', 'Account berhasil di delete!');
            $this->m_account->drop_account_id($id_account);
            redirect('account/account');
        }
    }

}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */
error_reporting(0);