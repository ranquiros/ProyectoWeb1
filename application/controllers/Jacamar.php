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
		$this->load->model('tour_model');
		//$data['page_title'] = "¡Copy Paste Reference! - Tutorial CodeIgniter";
 
		 //Obtener datos de la tabla 'contacto'
		 //$tours = $this->tour_model->getData(); //llamamos a la función getData() del modelo creado anteriormente.
		 
		 //$data['name'] = $tours;
		 
		 //load de vistas
		 //$this->load->view('product', $data); //llamada a la vista, que crearemos posteriormente
	}
 

		//$this->load->view('product');
		//$data['name'] = $this->tour_model->
		
	
	function recibir_datos(){
		$data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'price' => $this->input->post('price')
			);
		$this->tour_model->save_tour($data);
		$this->load->view('product');
	}

	function modificar_datos(){
		//$this->db->update();
		 //cargamos el modelo y obtenemos la información del contacto seleccionado.
		$this->load->model('tour_model');
		$data['tour'] = $this->tour_model->obtenerTour($_POST['$this->'.'editar']);
		//cargamos la vista para editar la información, pasandole dicha información.
		$this->load->view('edit', $data);
	}
	public function editar() {
		 //recogemos los datos por POST
		 $data['id'] = $_POST['id'];
		 $data['name'] = $_POST['txtNombre'];
		 $data['description'] = $_POST['txtDescripcion'];
		 $data['price'] = $_POST['txtPrecio'];
		 
		 //cargamos el modelo y llamamos a la función update()
		 $this->load->model('tour_model');
		 $this->tour_model->update($data);
		 //volvemos a cargar la primera vista
		 $this->load->view('edit');
 	}
	function borrar_datos(){

		 //obtenemos el nombre
		 $nombre = $_POST['txtNombre'];
		 //cargamos el modelo y llamamos a la función borrar_datos(), pasándole el nombre del registro que queremos borrar.
		 $this->load->model('tour_model');
		 $this->tour_model->borrar_datos($nombre);
		 //mostramos la vista de nuevo.
		 $this->index();
		 
	}

	
}
