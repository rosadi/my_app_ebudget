<?php 

    function set_user_agent(){

        # input data Operating System
        $hua = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
        $os = 'I have no idea...';

        if(preg_match('/android/i', $hua)) {
            $os = 'Android';
        } elseif (preg_match('/linux/i', $hua)) {
            $os = 'Linux';
        } elseif (preg_match('/iphone/i', $hua)) {
            $os = 'iPhone';
        } elseif (preg_match('/macintosh|mac os x/i', $hua)) {
            $os = 'Mac';
        } elseif (preg_match('/windows|win32/i', $hua)) {
            $os = 'Windows';
        }

        # date time now
        date_default_timezone_set("Asia/Jakarta");
        $time_date = date("Y-m-d h:i:sa");

        
        $CI = & get_instance();

        $time_date;
        $os;
        $browser = $CI->agent->browser();
        $ip = $CI->input->ip_address();

        $data = array('time_date' => $time_date,
          'os' => $os,
          'browser' => $browser,
          'ip' => $ip
          );
        
        
        $data = $CI->db->insert('user_agent', $data);
    }

?>