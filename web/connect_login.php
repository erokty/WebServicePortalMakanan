
<?php
include 'connect.php';

$username= $_POST['username'];
$password= $_POST['password'];

$query = "SELECT * FROM tbl_user WHERE username= '$username' AND password = '$password'";
$runquery=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($runquery);
if($rowcount > 0) { 
    session_start();
    $_SESSION['logged']=true;
    $_SESSION['username']= $username;
    header("location: index.php");
} 
else {
    echo"Your username or password was incorrect.";
    $_SESSION['logged']=false;
    header("location: login_1.php");
 
}
?>

