<?php
/**
 * Created by PhpStorm.
 * User: shreyash
 * Date: 18/11/2017
 * Time: 07:32 PM
 */

class LoginModel extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function checkUser($username){
        $this->db->where('username',$username);
        $result = $this->db->get('users');

        if($result){
            return $result->result_object();
        }else{
            return null;
        }
    }

}