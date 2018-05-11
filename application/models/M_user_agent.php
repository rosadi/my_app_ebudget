<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user_agent extends CI_Model {

    public function get_user_agent(){
        $query = "SELECT ip, COUNT(*) banyak_kedashboard, os, browser, time_date FROM user_agent GROUP BY ip HAVING ip > 1 ORDER BY id_user_agent";
        
        return $this->db->query($query)->result_array();
    }

}

/* End of file m_user_agent.php */
/* Location: ./application/models/m_user_agent.php */