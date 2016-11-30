
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class new_plan extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index(){
 {
		 $this->load->library('form_validation');
		$this->load->model("new_plan_model");
		$results=$this->new_plan_model->get_members();

		$data['members']=$results['members'];
		$data['trainers']=$results['trainers'];
	
    $this->load->view('new_plan', $data);
  
 }
 
 }
 
 function submitPlan(){
 
		$this->load->model('new_plan_model');
		
		 $member_id=$this->input->post('member_list');
		 $plan_type=$this->input->post('plan_type');
		 $trainer_id=$this->input->post('trainer_list');
		 $details=$this->input->post('details');
		 $days=$this->input->post('days');
		 $rate=$this->input->post('rate');
		 
		 $data=array(
		 'member_id'=>$member_id,
		 'plan_type'=>$plan_type,
		 'details'=>$details,
		 'trainer_id'=> $trainer_id,
		 'days'=>$days,
		 'rate'=>$rate,
		 );
		 $result=$this->new_plan_model->submit_plan($data);
		  if($result){
			 echo "<head><script>alert('Plan Added Successfully! ,');</script></head></html>";
			 redirect('new_plan', 'refresh');
			   
		  }
 }
 
 
}
 
?>