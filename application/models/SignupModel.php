<?php
/**
 * Created by PhpStorm.
 * User: shreyash
 * Date: 18/11/2017
 * Time: 02:02 PM
 */
class SignupModel extends CI_Model{


    public function __construct(){
        parent::__construct();
    }



    public function registerUser($data){

        $this->db->insert('users',$data);

        if($this->db->affected_rows()>=1) {
            return 1;
        }else{
            return 0;
        }

    }


    public function userExists($email){
        $this->db->where('email',$email);
        $result =  $this->db->get('users');

        if($result->num_rows()>=1){
            return 1;
        }else{
            return 0;
        }
    }
}