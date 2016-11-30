
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
	 $this->pageid = 3;
   $this->load->helper(array('form'));
   $this->load->view('includes/header');
	$this->load->view('includes/menu');
   $this->load->view('login');
 }
 
}
 
?>