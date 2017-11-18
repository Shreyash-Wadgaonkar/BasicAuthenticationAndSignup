<?php
/**
 * Created by PhpStorm.
 * User: shreyash
 * Date: 18/11/2017
 * Time: 01:58 PM
 */
class SignupController extends CI_Controller{

    public function  __construct(){
        parent::__construct();
        $this->load->model('SignUpModel');
        $this->lang->load('Signup');
    }


    public function index(){


        /*Load Page meta information*/
        $data['meta_title'] = $this->lang->line('meta_title');
        $data['meta_description'] = $this->lang->line('meta_description');
        $data['meta_author']    = $this->lang->line('meta_author');
        $data['menu_home']      = $this->lang->line('menu_home');
        $data['menu_signup']    = $this->lang->line('menu_signup');
        $data['menu_login']     = $this->lang->line('menu_login');
        $data['menu_logout']     = $this->lang->line('menu_logout');




        /*Load Form Text*/
        $data['text_username']              = $this->lang->line('text_username');
        $data['text_password']              = $this->lang->line('text_password');
        $data['text_email']                 = $this->lang->line('text_email');
        $data['text_firstname']             = $this->lang->line('text_firstname');
        $data['text_lastname']              = $this->lang->line('text_lastname');
        $data['text_signup_description']    = $this->lang->line('text_signup_description');
        $data['text_signup']                = $this->lang->line('text_signup');
        $data['text_gender']                = $this->lang->line('text_gender');
        $data['text_female']                = $this->lang->line('text_female');
        $data['text_male']                  = $this->lang->line('text_male');

        /*Notifications*/
        if($this->session->has_userdata('notification')){
            $data['notification'] = $this->session->userdata('notification');
            $this->session->set_userdata('notification',null);
        }else{
            $data['notification']='';
        }

        /*Load Views*/
        $this->load->view('common/header',$data);
        $this->load->view('user/signup',$data);
        $this->load->view('common/footer',$data);

    }


    public function signup(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('firstname', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('lastname', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');


        if($this->form_validation->run()!=FALSE){

            $hash = password_hash($this->input->post('password'),PASSWORD_BCRYPT);

            $pass = array(
                'ip'            => $_SERVER['REMOTE_ADDR'],
                'last_login'    => date('Y-m-d h:i:s'),
                'email'         => $this->input->post('email',TRUE),
                'username'      => $this->input->post('username',TRUE),
                'password'      => $hash,
                'firstname'     => $this->input->post('firstname',TRUE),
                'lastname'      => $this->input->post('lastname',TRUE),
                'gender'        => $this->input->post('gender',TRUE),
            );

            /*Check if user already registered with the email id*/
            if($this->SignUpModel->userExists($pass['email'])){
                $this->session->set_userdata('notification',$this->lang->line('text_user_exists'));
                redirect('signup');
            }

            /*Check if user already registered with the username */
            if($this->SignUpModel->userNameExists($pass['username'])){
                $this->session->set_userdata('notification',$this->lang->line('text_user_exists'));
                redirect('signup');
            }

            /*Process registration*/
            if($this->SignUpModel->registerUser($pass)){
                $this->session->set_userdata('notification',$this->lang->line('text_signup_complete'));
            }else{
                $this->session->set_userdata('notification',$this->lang->line('text_save_error'));
            }

        }

        redirect('signup');


    }



}