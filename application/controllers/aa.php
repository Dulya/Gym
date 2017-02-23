<?php
	$con=mysql_connect('localhost','root','') or die("unable to connect");
	mysql_select_db('exam',$con) or die("unable to connect");
	$query="insert into myexam values(2,'Japanese')";
	$result=mysql_query($query,$con) or die(mysql_error());
	echo $result;
	
	
?>