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
}
