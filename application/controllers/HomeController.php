<?php
/**
 * Created by PhpStorm.
 * User: shreyash
 * Date: 18/11/2017
 * Time: 07:54 PM
 */

class HomeController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('SessionModel');
        $this->SessionModel->checkSession();
        $this->lang->load('Home');
    }

    public function index(){

        /*Load Page meta information*/
        $data['meta_title']         = $this->lang->line('meta_title');
        $data['meta_description']   = $this->lang->line('meta_description');
        $data['meta_author']        = $this->lang->line('meta_author');
        $data['menu_home']          = $this->lang->line('menu_home');
        $data['menu_signup']        = $this->lang->line('menu_signup');
        $data['menu_login']         = $this->lang->line('menu_login');
        $data['menu_logout']        = $this->lang->line('menu_logout');

        $data['text_home']          = $this->lang->line('text_home');
        $data['text_welcome']       = $this->lang->line('text_welcome');




        /*Load Views*/
        $this->load->view('common/header',$data);
        $this->load->view('user/home',$data);
        $this->load->view('common/footer',$data);
    }


}