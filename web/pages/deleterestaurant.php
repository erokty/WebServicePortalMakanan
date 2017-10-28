<?php


$user_name="root"; 
	$password="";
	$host_name="localhost"; 
	$sid =$_GET['id'];
	$con= mysqli_connect($host_name,$user_name,$password); 
	mysqli_select_db($con,'project_apsi') or die(mysqli_error($con));
	
       
	if($con) 
	{
		$sql="DELETE FROM tbl_restaurant WHERE restaurant_id = ".$sid.""; 
		 $result= mysqli_query($con,$sql); 
                 if($connect->query($result) === true) { 
		echo '<meta http-equiv="refresh" content="1;url=profil.php?p=restaurantlist"/>';
        }
        else {echo '<meta http-equiv="refresh" content="1;url=profil.php?p=restaurantlist"/>';}
      
        }
	
?> 