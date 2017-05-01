<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

	/*public function login($username, $password){
		$this->db->where('usuario', $usuario);
		$this->db->where('password', $password);
		$myquery = $this->db->get('usuarios');
		if ($myquery->num_rows()>0){
			return true;
		else {
			return false;
		}	
		}
	}*/
	function can_login($username, $password) {  
        $this->db->where('username', $username);  
        $this->db->where('password', $password);  
        $query = $this->db->get('users');  
        //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
        if($query->num_rows() > 0)  
        {  
            return true;  
        }  
        else  
        {  
            return false;       
        }  
    }
	/*function authenticate($user, $pass) {
    	$query = $this->db->get_where('usuario', array('username' => $user, 'password' => $pass));
		return $query->result_object();
  	}

  	function save($user){
	    $r = $this->db->insert('usuario', $user);
	    return $r;
	}

	function all(){
    	$query = $this->db->get('users');
	    return $query->result_object();
  	}
*/
   /* function registrarse($data){
    	$this->db->insert('enciclopedia', array());
    }*/
 }  