<?php
/**
 * Created by PhpStorm.
 * User: shreyash
 * Date: 18/11/2017
 * Time: 07:13 PM
 */
class LoginController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->lang->load('Login');
        $this->load->model('LoginModel');
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



        /*Notifications*/
        if($this->session->has_userdata('notification')){
            $data['notification'] = $this->session->userdata('notification');
            $this->session->set_userdata('notification',null);
        }else{
            $data['notification']='';
        }


        /*Login Fields*/
        $data['text_login']    = $this->lang->line('text_login');
        $data['text_username'] = $this->lang->line('text_username');
        $data['text_password'] = $this->lang->line('text_password');


        /*Load Views*/
        $this->load->view('common/header',$data);
        $this->load->view('user/login',$data);
        $this->load->view('common/footer',$data);
    }


    public function login(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()!=FALSE){
            $data = $this->LoginModel->CheckUser($this->input->post('username'));

            if($data){
                if(password_verify($this->input->post('password',TRUE),$data[0]->password)){
                    $this->session->set_userdata('notification',$this->lang->line('text_login_success'));
                    set_cookie(SESSION_COOKIE,session_id(),time()+3600,'/');

                    $info = array(
                        'id' => $data[0]->id,
                        'username' =>$data[0]->username,
                        'firstname' =>$data[0]->firstname,
                        'lastname' =>$data[0]->lastname,
                        'gender' =>$data[0]->gender,
                        'email' =>$data[0]->email,
                        'last_login' =>$data[0]->last_login,
                        'ip' =>$data[0]->ip,
                        'session_id' => session_id(),
                    );

                    $this->session->set_userdata(SESSION_COOKIE,$info);
                    redirect('home');


                }else{
                    $this->session->set_userdata('notification',$this->lang->line('text_login_failed'));
                }
            }
        }

        redirect('login');

    }

}