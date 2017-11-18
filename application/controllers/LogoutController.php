<?php
/**
 * Created by PhpStorm.
 * User: shreyash
 * Date: 18/11/2017
 * Time: 08:28 PM
 */
class LogoutController extends CI_Controller{

    public function  __construct(){
        parent::__construct();
    }


    public function index(){
        $this->session->sess_destroy();
        setcookie(SESSION_COOKIE,'', time() - 3600, '/');
        redirect('login');
    }

}