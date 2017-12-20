<?php 

// include 'connect.php';
include 'connectGuzzle.php';

$id= $_GET["id"];
$client = new GuzzleHttp\Client();
$url = "http://localhost:8000/api/v1/restaurant/get/".$id;
$response = $client->request('GET', $url, $headers);

$result = json_decode($response->getBody()->getContents());
$data = $result->data;
// $sql= "SELECT * FROM tbl_restaurant WHERE restaurant_id=".$id."";
// $hasil = $connect->query($sql);

// while($row = mysqli_fetch_assoc($hasil))
    echo '<h1>'.$data->name.'</h1>';
    echo '<p>'.$data->description.'</p>';
    if ($data->file_name != "") {
        echo '<img  src="http://localhost:8000/api/v1/file/download/'.$data->file_name.'"height="250" width="400"/>';
    } else {
        echo "No Image Uploaded.";
    }

?>




