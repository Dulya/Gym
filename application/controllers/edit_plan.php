
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class edit_plan extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
		$this->load->model("new_plan_model");
		$results=$this->new_plan_model->get_members();
		$data['members']=$results['members'];
		$this->load->view('edit_plan',$data);
 }
 
 function get_plan_details(){
	 $member_id=$this->input->post('member_list');
	 $this->load->model('new_plan_model');
	 $results=$this->new_plan_model->get_plans($member_id);
	 $data['info']=$results['info'];
	$results=$this->new_plan_model->get_members();
	$data['members']=$results['members'];
		
	 $this->load->view('edit_plan', $data);
 
 }
 
 function auto_load_plans(){
	$member_id = $this->session->flashdata('member_id');
	 $this->load->model('new_plan_model');
	 $results=$this->new_plan_model->get_plans($member_id);
	 $data['info']=$results['info'];
	$results=$this->new_plan_model->get_members();
	$data['members']=$results['members'];
		
	 $this->load->view('edit_plan', $data);
 
 }
 
 function edit_plan_detail(){
	 $this->load->model("new_plan_model");
		$results=$this->new_plan_model->get_members();

		$data['members']=$results['members'];
		$data['trainers']=$results['trainers'];
	$plan_id=$this->input->post('plan_id');
	$member_id=$this->input->post('member_id');
	//print_r("dddddddd");
	//print_r($member_id);
	$data['plan_id']=$plan_id;
	$data['member_id']=$member_id;
	$this->load->view('edit_plan_detail_view',$data);
 }
 
 function update_plan(){
	 
	 
		$this->load->model('new_plan_model');
		 $member_id=$this->input->post('member_id');
		 $plan_type=$this->input->post('plan_type');
		 $trainer_id=$this->input->post('trainer_list');
		 $details=$this->input->post('details');
		 $days=$this->input->post('days');
		 $rate=$this->input->post('rate');
		 $plan_id=$this->input->post('plan_id');
		 $data=array(
		 'member_id'=>$member_id,
		 'plan_type'=>$plan_type,
		 'details'=>$details,
		 'trainer_id'=> $trainer_id,
		 'days'=>$days,
		 'rate'=>$rate,
		 'plan_id'=>$plan_id
		 );
		
		 $result=$this->new_plan_model->update_plan($data);
		  if($result){
			 echo "<head><script>alert('Plan Updated Sucessfully! ,');</script></head></html>";
			 $this->session->set_flashdata('member_id',$member_id);
			 redirect('edit_plan/auto_load_plans', 'refresh');
			   
		  }
 
 }
 
 function delete_plan(){
	 
		$this->load->model('new_plan_model');
		$data['plan_id']=$this->input->post('plan_id');
		$data['member_id']=$this->input->post('member_id');
		
		 $result=$this->new_plan_model->delete_plan($data);
		  if($result==true){
			 
			echo "<html><head><script>alert('Plan Deleted Sucessfully');</script></head></html>";
			redirect('edit_plan/auto_load_plans', 'refresh');
			   
		  }else{
			 
			  echo "<html><head><script>alert('Plan Deleted Unsuccessful!');</script></head></html>";
			//redirect('edit_plan/get_plan_details');
		  }
 
 }
}
 
?>