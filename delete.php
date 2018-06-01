<?php
				
	$id =$_GET['id'];
						
	$connect=mysql_connect("localhost","root","");// Establishing Connection with Server
	mysql_select_db("coffee",$connect);// Selecting Database from Server
	
	if (!$connect) {
    	die("Connection failed: " . mysql_connect_error());
	}
				
	$q1 = "DELETE FROM cart WHERE id = $id";
	if(mysql_query($q1))
	{
		 mysql_close($connect);	
		 header('Location: index.php');
	}
	else {
 	   echo "Error deleting record";
	}				
	
?>