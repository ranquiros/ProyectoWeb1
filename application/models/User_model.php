
<?php
class User_model extends CI_Model {
	
	function authenticate ($user, $pass)
	{
		$query=$this->db->get_where('users', aray('username'));
		return $query->result_object();
	}
}

?>
