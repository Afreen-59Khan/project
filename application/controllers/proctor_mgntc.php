<?php

class Proctor_mgntc extends CI_Controller
{
		
		public function __construct() {

		parent::__construct();
		$this->load->helper('url');
	}



		public function index()
		{	
         		$this->load->view('proctor_mgnt');
        }
        
}