<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tour_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function save_tour($data){
	    $this->db->insert('tour', array('name'=> $data['name'], 'description'=>$data['description'], 'price' =>$data['price']));
	    
	}
}