<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_agent extends CI_Controller {


    public function index(){   

        # di input ke model user agent
        #$this->load->model('m_user_agent');

        $this->load->helper('user_agent');
        $this->load->library('user_agent');
        set_user_agent();

        redirect('user_agent/page_user_agent');

    }

    public function page_user_agent(){
        $this->load->model('m_user_agent');
        $data['view_dashboard'] = $this->m_user_agent->get_user_agent();
        $this->template->load('themes/template', 'user_agent/v_user_agent', $data);    
    }

}

/* End of file user_agent.php */
/* Location: ./application/controllers/user_agent.php */
error_reporting(0);