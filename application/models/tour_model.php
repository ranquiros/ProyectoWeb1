<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tour_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function save_tour($data){
	    $this->db->insert('tour', array('name'=> $data['name'], 'description'=>$data['description'], 'price' =>$data['price']));
	    
	}

	function obtener_datos(){
		$query = $this->db->get('tour');
		return $query->result();
		//if($query -> num_rows() > 0) return $query;
		//else return false;
	}
	function borrar_datos($nombre) {
		$this->db->where('name', $nombre);
		$this->db->delete('tour');
 	}
 	function obtenerTour($idTour) {
		$this->db->select('name, description, price, id');
		$this->db->from('tour');
		$this->db->where('id = ' . $idTour);
		$tour = $this->db->get();
		return $tour->result();
	}
	function update($data) {
		$this->db->set('name', $data['name']);
		$this->db->set('description', $data['description']);
		$this->db->set('price', $data['price']);
		$this->db->where('id', $data['id']);
		$this->db->update('tour');
 	}
}