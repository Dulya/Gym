<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['user_name'] = $session_data['user_name'];
	 $this->load->model('member_model');
$results=$this->member_model->memberCount();
	  $data['member_num'] =$results['member_num'];
     $this->load->view('admin_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }
 
}
 
?>