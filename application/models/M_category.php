<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_category extends CI_Model {

    public function set_category_income(){
        $category_name = htmlspecialchars($this->input->POST('category_name'));
        $level = 1;

        $data = array('category_name' => $category_name, 'level' => $level);
        return $this->db->insert('tbl_category', $data);
    }

    public function get_category_income(){
        $data =  array('level' => 1, );
        $query = $this->db->get_where('tbl_category', $data);
        return $query->result_array();
    }

    public function get_where_category_income($id_category){
        $query = $this->db->get_where('tbl_category', array('id_category'=> $id_category));
        return $query->row_array();
    }

    public function update_where_category_income($id_category){
        $category_name = htmlspecialchars($this->input->POST('category_name'));
        $level = 1;

        $data = array('category_name' => $category_name, 'level' => $level);
        $this->db->where('id_category', $id_category);
        return $this->db->update('tbl_category', $data);
    }

    public function delete_where_category_income($id_category){
        return $this->db->delete('tbl_category', array('id_category' => $id_category));
    }

////////////////////////////////////////////////////////////////////////////////////////////////////
// EXPANSE ====================================================================================== //
////////////////////////////////////////////////////////////////////////////////////////////////////

    public function set_category_expanse(){
        $category_name = htmlspecialchars($this->input->POST('category_name'));
        $level = 2;

        $data  = array('category_name' => $category_name, 'level' => $level);
        return $this->db->insert('tbl_category', $data);
    }

    public function get_category_expanse(){
        $data  =  array('level' => 2);
        $query = $this->db->get_where('tbl_category', $data);
        return $query->result_array();
    }

    public function get_where_category_expanse($id_category){
        $query = $this->db->get_where('tbl_category', array('id_category'=> $id_category));
        return $query->row_array();
    }

    public function update_where_category_expanse($id_category){
        $category_name = htmlspecialchars($this->input->POST('category_name'));
        $level = 2;

        $data = array('category_name' => $category_name, 'level' => $level);
        $this->db->where('id_category', $id_category);
        return $this->db->update('tbl_category', $data);
    }

    public function delete_where_category_expanse($id_category){
        return $this->db->delete('tbl_category', array('id_category' => $id_category));
    }

}

/* End of file m_category.php */
/* Location: ./application/models/m_category.php */