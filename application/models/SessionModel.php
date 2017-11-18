<?php
/**
 * Created by PhpStorm.
 * User: shreyash
 * Date: 18/11/2017
 * Time: 07:32 PM
 */
class SessionModel extends CI_Model{

    public function checkSession(){
        if(!$this->session->userdata(SESSION_COOKIE)){
            $this->session->userdata('notification',$this->lang->line('text_session_expired'));
            redirect('login');
        }

        if(!$this->session->userdata(SESSION_COOKIE)['session_id'] != get_cookie(SESSION_COOKIE)){
            $this->session->userdata('notification',$this->lang->line('text_session_expired'));
            redirect('login');
        }
    }

    public function registerLogout(){

    }

}