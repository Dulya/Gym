
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class payment extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
	
		$this->load->model("payment_model");
		$results=$this->payment_model->get_unpaid_plans();
		$data['payments']=$results['payments'];
        $this->load->view('payment', $data);
 }
 
}
 
?>