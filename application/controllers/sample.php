<?php

class Sample extends CI_Controller
{
		
		public function __construct() {

		parent::__construct();
		$this->load->helper('url');
	}



		public function index()
		{	
         		$this->load->view('samplev');
        }
        public function exam()
        {
        	$var=$this->input->post('name');
        	echo $var;
        }
}