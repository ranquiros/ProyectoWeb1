<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jacamar extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		//$this->load->model('user_model');
	}

	public function index()
	{
		/*$this->load->library('menu', array('Home', 'Login', 'Contact'));
		$data['my_menu'] = $this->menu->built_Menu();*/
		$this->load->view('main_menu');
		$this->load->view('welcome_message'/*, $data*/);
		
	}
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
