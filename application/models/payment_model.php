<?php
class payment_model extends CI_Model {

 function get_unpaid_plans()
{
	$this -> db -> select('*');
	$this -> db -> from('member_plan');
	$this -> db -> where('payment','NOT PAID');
	$query = $this -> db -> get();
	//print_r($query->result());
	return array('payments'=>$query->result());  
}

function get_my_unpaid_plan($user_name)
{
	$this -> db -> select('id');
	$this -> db -> from('member');
	$this -> db -> where('user_name',$user_name);
	$query = $this -> db -> get();
	$result=$query->result(); 
	//print_r($result);
	$member_id=$result[0]->id; 
	
	$this -> db -> select('plan_id,plan_type,rate,member_id');
	$this -> db -> from('member_plan');
	$this -> db -> where('payment','NOT PAID');
	$this -> db -> where('member_id',$member_id);
	$query = $this -> db -> get();
	
     return $query->result();
  
   

}

function update_payment($data)
{
	$info = array(
               'payment' => 'PAID',
               'plan_status' => 'ACTIVE'
               
            );
	//print_r($info['member_id']);
	//print_r($info['plan_id']);
	//print_r($info['rate']);
	$this -> db -> where('payment','NOT PAID');
	$this -> db -> where('plan_id',$data['plan_id']);
	$this -> db -> where('plan_status','INACTIVE');
	$this -> db -> update('member_plan',$info);
	$num=$this->db->affected_rows();
	if($num>0){
		return 1;
	}else{
		return 0;
	}
}
}
?>