<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->pageid = 1;
		$this->load->view('includes/header');
		$this->load->view('includes/main_slider');
		$this->load->view('includes/menu');
		$this->load->view('main');
		$this->load->view('includes/footer');
	}
}
