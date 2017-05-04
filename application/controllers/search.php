<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct(){
		parent::__construct();
				
	}

	public function index()
	{
		$this->load->view('main_menu');
		$this->load->view('search');
	}
}