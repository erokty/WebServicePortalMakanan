
<?php
include 'connectGuzzle.php';

$email= $_POST['email'];
$password= $_POST['password'];

// $query = "SELECT * FROM tbl_user WHERE username= '$username' AND password = '$password'";
// $runquery=mysqli_query($con,$query);
// $rowcount=mysqli_num_rows($runquery);

$client = new GuzzleHttp\Client();

$url = "http://localhost:8000/api/v1/login";

$data = ['email' => $email, 'password' => $password];

$response = $client->post($url, ['query' => $data]);

$result = json_decode($response->getBody()->getContents());

if($result->status_code == 200) { 
    session_start();
    $_SESSION['logged']=true;
    $_SESSION['username']= $result->user->name;
    $_SESSION['is_admin']=true;
    header("location: index.php");
} 
else {
    echo"Your username or password was incorrect.";
    $_SESSION['logged']=false;
    $_SESSION['is_admin']=false;
    header("location: login_1.php");
}
?>

