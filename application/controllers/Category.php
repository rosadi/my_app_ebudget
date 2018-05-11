<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('m_category');
    }

    // income ======================================================================================
    public function category_income(){
        $this->form_validation->set_rules('category_name', 'Category Name', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # code...
            $data['data_category'] = $this->m_category->get_category_income();
            $this->template->load('themes/template', 'category/v_income_category', $data);
        }else{
            $this->m_category->set_category_income();
            $this->session->set_flashdata('category_income_input', 'Category Name berhasil di buat!');
            redirect('category/category_income');
        }
    }

    public function edit_category_income($id_category = FALSE){
        if ( $id_category == NULL ) {
            # code...
            redirect('category/category_income');
        }else{
            $this->form_validation->set_rules('category_name', 'Category Name', 'required');

            if ( $this->form_validation->run() === FALSE ) {
                # code...
                $data['data_category'] = $this->m_category->get_category_income();
                $data['data_category_id'] = $this->m_category->get_where_category_income($id_category);
                $this->template->load('themes/template', 'category/v_income_category_edit', $data);
            }else{
                $this->m_category->update_where_category_income($id_category);
                $this->session->set_flashdata('category_income_update', 'Category Name berhasil di update!');
                redirect('category/category_income');
            }   
        }
    }

    public function delete_category_income($id_category){
        $this->m_category->delete_where_category_income($id_category);
        $this->session->set_flashdata('category_income_delete', 'Category Name berhasil di delete!');
        redirect('category/category_income');
    }

    // income  =====================================================================================
    // expanse =====================================================================================

    public function category_expanse(){
        $this->form_validation->set_rules('category_name', 'Category Name', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # code...
            $data['data_category_expanse'] = $this->m_category->get_category_expanse();
            $this->template->load('themes/template', 'category/v_expanse_category', $data);
        }else{
            $this->m_category->set_category_expanse();
            $this->session->set_flashdata('category_expanse_input', 'Category Name berhasil di buat!');
            redirect('category/category_expanse');
        }
    }

    public function edit_category_expanse($id_category){
        if ( $id_category == NULL ) {
        # code...
            redirect('category/category_expanse');
        }else{
            $this->form_validation->set_rules('category_name', 'Category Name', 'required');

            if ( $this->form_validation->run() === FALSE ) {
            # code...
                $data['data_category_expanse'] = $this->m_category->get_category_expanse();
                $data['data_category_id'] = $this->m_category->get_where_category_expanse($id_category);
                $this->template->load('themes/template', 'category/v_expanse_category_edit', $data);
            }else{
                $this->m_category->update_where_category_expanse($id_category);
                $this->session->set_flashdata('category_expanse_update', 'Category Name berhasil di update!');
                redirect('category/category_expanse');
            }
        }
    }

    public function delete_category_expanse($id_category){
        if ( $id_category == NULL ) {
        # code...
            redirect('category/category_expanse');
        }else{
            $this->m_category->delete_where_category_expanse($id_category);
            redirect('category/category_expanse');
        }
    }

    // expanse =====================================================================================



}

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */
error_reporting(0);