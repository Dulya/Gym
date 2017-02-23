<?php
class new_plan_model extends CI_Model {

 function get_members()
{
  
   $sql1 = $this->db->query('SELECT id,user_name FROM member');
   $sql2 = $this->db->query('SELECT trainer_id,name FROM trainer');
   
   return array('members' => $sql1->result(), 'trainers' => $sql2->result());
    
    
}
function submit_plan($data){
	 $this->db->insert('member_plan',$data);
	 return ($this->db->affected_rows() != 1) ? false : true;
}

function get_plans($member_id){
	$this -> db -> select('*');
	$this -> db -> from('member_plan');
	$this -> db -> where('member_id', $member_id);
	$query = $this -> db -> get();
	//print_r($query->result());
	return array('info'=>$query->result());

}

function update_plan($data){
	$info = array(
               'plan_id' => $data['plan_id'],
               'member_id' => $data['member_id'],
			   'plan_type' => $data['plan_type'],
			   'details' => $data['details'],
			   'trainer_id' => $data['trainer_id'],
			   'days' =>$data['days'],
			   'rate' =>$data['rate'],
              
            );
	
	$this -> db -> where('plan_id',$data['plan_id']);
	$this -> db -> update('member_plan',$info);
	$num=$this->db->affected_rows();
	if($num>0){
		return 1;
	}else{
		return 0;
	}

}

function delete_plan($data){
$this -> db -> where('member_id', $data['member_id']);
$this -> db -> where('plan_id', $data['plan_id']);
  $this -> db -> delete('member_plan');
  $num=$this->db->affected_rows();
	if($num==1){
		return 1;
	}else{
		return 0;
	}

}
}
