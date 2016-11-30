<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->pageid = 2;
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('about');
		$this->load->view('includes/footer');
	}
}
