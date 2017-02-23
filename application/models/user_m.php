<?php
class user_m extends CI_Model {

 function login($username, $password)
 
 {
	echo $username;
	echo $password;
   $this -> db -> select('user_name, password,user_type');
   $this -> db -> from('auth_user');
   $this -> db -> where('user_name', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}