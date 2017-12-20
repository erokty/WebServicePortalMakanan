<img class="gambar" src="images/img3.jpg" alt="">
<h1 style="padding-bottom:30px"> My Profile </h1>
<?php 



	// $user_name="root"; 
	// $password="";
	// $host_name="localhost"; 
	
	// $con= mysqli_connect($host_name,$user_name,$password); 
	// mysqli_select_db($con,'project_apsi') or die(mysqli_error($con));
	
include 'connectGuzzle.php';
// 
$client = new GuzzleHttp\Client();

$url = "http://localhost:8000/api/v1/getCurrentUser";

$response = $client->request('GET', $url, $headers);

$result = json_decode($response->getBody()->getContents());
$data = $result->data;
       
	// if($con) 
	// {
	// 	$sql = "SELECT * FROM tbl_user WHERE username = '".$_SESSION['username']."'"; 
	// 	$result = mysqli_query($con,$sql); 
		
	// 	while($row = mysqli_fetch_assoc($result))
	// 	{
                        echo "<div class='table-responsive'>";
                         echo "<table class='table table-striped'>";
                        echo "<tr><td>Name </td><td>".$data->name."</td></tr>";
                        echo "<tr><td>Email </td><td>".$data->email."</td></tr>";
                        echo "<tr><td>Address </td><td>".$data->address."</td></tr>";
                        echo "<tr><td>Birth Date</td><td>".date('m-d-Y', strtotime((string)$data->birthdate->date))."</td></tr>";
                        echo "<tr><td>Phone </td><td>".$data->phone_number."</td></tr>";
                        echo "</table>";
                        echo "</div>";
		// }

// }
?>



