<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jacamar extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('tour_model');
		$this->load->view('product');
	}

	public function index()
	{
		/*$this->load->library('menu', array('Home', 'Login', 'Contact'));
		$data['my_menu'] = $this->menu->built_Menu();*/
		//$this->load->view('main_menu');
		//$this->load->view('welcome_message'/*, $data*/);
		$this->load->view('product');
		
	}
	function recibir_datos(){
		$data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'price' => $this->input->post('price')
			);
		$this->tour_model->save_tour($data);
		//$this->load->view('product');
	}


	/*function tour_validation() {  
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
    }  */
//Tengo esta funci[on desactivada porque me da error a la hora de cargar la pagina de inicio, seria bueno revisar bien el asunto de insertar en la base de datos]
	/*function recibirDatos(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'password' => $this->input->post('pass')
			);
		$this->user_model->registrarse($data);
	}

//crear el encabezado
//crear funcion para el formulario

	/*public function authenticate()
	{
		$user = $this->input->post('username');

		//$this->load->model('User_model');
		//$r = $this->User_model->authenticate($user, $pass);
	}*/
}
