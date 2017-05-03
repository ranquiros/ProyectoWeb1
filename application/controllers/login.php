<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('user_model');

	}
	function index(){
		$this->load->view('login');

	}
	function login(){  
        $data['title'] = 'Please Login';  
        $this->load->view("login", $data);  
    } 
	function login_validation() {  
        $this->load->library('form_validation');  
        $this->form_validation->set_rules('username', 'Username', 'required');  
        $this->form_validation->set_rules('password', 'Password', 'required');  
        if($this->form_validation->run()) {  
            //true  
            $username = $this->input->post('username');  
            $password = $this->input->post('password');  
            //model function  
            $this->load->model('user_model');  
            if($this->user_model->can_login($username, $password)) {  
                $session_data = array('username' => $username);  
                $this->session->set_userdata($session_data);  
                redirect(base_url() . 'login/enter');  
            }  
            else  
            {  
                $this->session->set_flashdata('error', 'Invalid Username and Password');  
                redirect(base_url() . 'login/login');  
            }  
        }  
        else  
        {  
            //false  
            $this->login();  
        }  
    }  
    function enter(){  
        if($this->session->userdata('username') != '') {  
            echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
            echo '<label><a href="'.base_url().'login/logout">Logout</a></label> <br/> <br/>'; 
            echo '<label><a href="'.base_url().'jacamar/index">Ingresar Producto</a></label>';  
        }  
        else  
        {  
            redirect(base_url() . 'login/login');  
        }  
      }  
    function logout() {  
        $this->session->unset_userdata('username');  
        redirect(base_url() . 'login/login');  
    }  

}  
