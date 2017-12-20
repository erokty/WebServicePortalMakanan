<?php


// $user_name="root"; 
//  $password="";
//  $host_name="localhost"; 
    $id =$_GET['id'];
    // $con= mysqli_connect($host_name,$user_name,$password); 
    // mysqli_select_db($con,'project_apsi') or die(mysqli_error($con));
    
       
    // if($con) 
    // {
    //  $sql="DELETE FROM tbl_user WHERE user_id = ".$id.""; 
    //   $result= mysqli_query($con,$sql); 
include 'connectGuzzle.php';

$client = new GuzzleHttp\Client();

$url = "http://localhost:8000/api/v1/user/destroy/" . $id;

$response = $client->request('GET', $url, $headers);

$result = json_decode($response->getBody()->getContents());

echo '<meta http-equiv="refresh" content="1;url=profil.php?p=accountmanagement"/>';
      
    
?> 