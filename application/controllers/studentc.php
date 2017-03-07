<?php

class Studentc extends CI_Controller
{
	 public function index()
	 {
	 	$this->load->view('studentv');
	 }
	 public function add_data()
	 {
	 		$this->load->model('studentm');
	 		$this->studentm->modeldata();
	 		$this->load->view('studentv');


	 }
}