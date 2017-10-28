<?php


$user_name="root"; 
	$password="";
	$host_name="localhost"; 
	$sid =$_GET['id'];
	$con= mysqli_connect($host_name,$user_name,$password); 
	mysqli_select_db($con,'project_apsi') or die(mysqli_error($con));
	
       
	if($con) 
	{
		$sql="DELETE FROM tbl_review WHERE review_id = ".$sid.""; 
		 $result= mysqli_query($con,$sql); 
                 if($connect->query($result) === true) { 
		echo '<meta http-equiv="refresh" content="1;url=profil.php?p=reviewlist"/>';
        }
        else {echo '<meta http-equiv="refresh" content="1;url=profil.php?p=reviewlist"/>';}
      
        }
	
?> 

