<?php
class member_model extends CI_Model {

 function memberCount()
 
 {
	$date  = date('Y-m');
	$this -> db -> select('*');
   $this -> db -> from('member');
   $this -> db -> where('registered_date','$date%');
   
	//$query = "select '*' from member WHERE registered_date LIKE '$date%'";
	 $query = $this -> db -> get();
	 return array('member_num'=>$query->result());
 }
}