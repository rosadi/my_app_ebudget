<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_account extends CI_Model {

    public function set_account(){
        $data = array('account_name' => htmlspecialchars($this->input->POST('account_name')));
        return $this->db->insert('tbl_account', $data);
    }

    public function get_account(){
        $query = $this->db->get('tbl_account');
        return $query->result_array();
    }

    public function get_account_id($id_account){
        $query = $this->db->get_where('tbl_account', array('id_account' => $id_account));
        return $query->row_array();
    }

    public function update_account_id($id_account){
        $data = array('account_name' => htmlspecialchars($this->input->POST('account_name')));
        $this->db->where('id_account', $id_account);
        return $this->db->update('tbl_account', $data);
    }

    public function drop_account_id($id_account){
        return $this->db->delete('tbl_account', array('id_account' => $id_account));
    }

}

/* End of file m_account.php */
/* Location: ./application/models/m_account.php */