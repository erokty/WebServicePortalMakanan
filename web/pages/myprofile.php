<img class="gambar" src="images/img3.jpg" alt="">
<h1 style="padding-bottom:30px"> My Profile </h1>
<?php 



	$user_name="root"; 
	$password="";
	$host_name="localhost"; 
	
	$con= mysqli_connect($host_name,$user_name,$password); 
	mysqli_select_db($con,'project_apsi') or die(mysqli_error($con));
	
       
	if($con) 
	{
		$sql = "SELECT * FROM tbl_user WHERE username = '".$_SESSION['username']."'"; 
		$result = mysqli_query($con,$sql); 
		
		while($row = mysqli_fetch_assoc($result))
		{
                        echo "<div class='table-responsive'>";
                         echo "<table class='table table-striped'>";
                        echo "<tr><td>Username </td><td>".$row['username']."</td></tr>";
                        echo "<tr><td>Name </td><td>"  .$row['name']."</td></tr>";
                        echo "<tr><td>Address </td><td>"  .$row['address']."</td></tr>";
                        echo "<tr><td>Birth Date</td><td>"  .$row['birth_date']."</td></tr>";
                        echo "<tr><td>Phone  </td><td>"  .$row['phone_number']."</td></tr>";
                        echo "<tr><td>Email </td><td>"  .$row['email']."</td></tr>";
                        echo "</table>";
                        echo "</div>";
		}

}
?>



