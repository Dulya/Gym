<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class manage_plan extends CI_Controller {
 
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
	 $data['info']=$this->new_plan_model->get_plans($member_id);
		$this->load->model("new_plan_model");
		$results=$this->new_plan_model->get_members();
		$data['members']=$results['members'];
		
	 $this->load->view('edit_plan', $data);
 
 }
}
 
?>