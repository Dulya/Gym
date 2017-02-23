
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class member_payment extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index(){
 {
		if($this->session->userdata('logged_in'))
   {
			$session_data = $this->session->userdata('logged_in');
			$data['user_name'] = $session_data['user_name'];
			$this->load->model('payment_model');
			$data['results']=$this->payment_model->get_my_unpaid_plan($data['user_name']);
			$this->load->view('member_payment_view', $data);
   }
	
    
  
 }
 }
 
 
 
 
 
}
 
?>