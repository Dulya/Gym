
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class PaymentSuccess extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
		$data['plan_id']=$this->input->get('tx');
		//print_r($data['plan_id']);
		$data['member_id']=$this->input->get('item_number');
		//print_r($data['member_id']);
		$data['rate']=$this->input->get('amt');
		//print_r($data['rate']);
		$this->load->model('payment_model');
		$report=$this->payment_model->update_payment($data);
		if ($report==1) {
				echo '<script>alert("You Have Successfully Updated the payment record!");</script>';
               redirect(base_url().'member_payment','refresh');
		} else {
			echo '<script>alert("Update Failed!</script>';
		}
		//header('Location: '.base_url().'member_payment_view');
		
  
 }
 
 public function pay_by_admin()
 {
		$plan_id=$this->input->post('plan_id');
		$member_id=$this->input->post('member_id');
		$rate=$this->input->post('rate');
		//echo $plan_id;
		//echo $rate;
		//echo $member_id;
		$data['member_id']=	$member_id;
		$data['plan_id']=	$plan_id;
		$data['rate']=	$rate;
		$this->load->model('payment_model');
		$report=$this->payment_model->update_payment($data);
		if ($report==1) {
				echo '<script>alert("You Have Successfully Updated the payment record!");</script>';
               redirect(base_url().'payment', 'refresh');
		} else {
			print_r("fails");
		}
 }
 
 
 
 
 
 
}
 
?>