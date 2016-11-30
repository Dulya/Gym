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

}
?>