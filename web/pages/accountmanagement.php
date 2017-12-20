<img class="gambar" src="images/img3.jpg" alt="">
<h1 style="padding-bottom:30px"> Account Management</h1>
<?php
// include 'connect.php';
include 'connectGuzzle.php';
if (!isset($_GET['url'])) {
    $url = "http://localhost:8000/api/v1/getUsers";
} else {
    $url = $_GET['url'];
}


$client = new GuzzleHttp\Client();

$response = $client->request('GET', $url, $headers);

$result = json_decode($response->getBody()->getContents());
$resultData = $result->data;
$datas = $resultData->data;

// $sql= "SELECT * FROM tbl_user ORDER BY username ASC LIMIT $startrow, 10";
// $hasil = $connect->query($sql);


 
?>
<div class="table-responsive">
<table class="table table-striped">
<tr> 

<th class="thheader"> Name </th> 
<th class="thheader"> Email </th> 
<th class="thheader"> Address </th> 
<th class="thheader"> Birth Date </th> 
<th class="thheader"> Phone Number </th> 
<th class="thheader"> </th>

 
</tr>
<?php
// if($hasil === false) {
//  trigger_error('Perintah SQL salah: ' . $sql . ' Error: ' . $mysqli->error, E_USER_ERROR);
// } else {
//  while($data = $hasil->fetch_array()){
  foreach ($datas as $data) {
        echo "<tr>";
        
        echo "<td>$data->name</td>";
        echo "<td>$data->email</td>";
        echo "<td>$data->address</td>";
        echo "<td>".date('m-d-Y', strtotime((string)$data->birthdate))."</td>";
        echo "<td>$data->phone_number</td>";
        echo "<td><a href=\"profil.php?p=deleteaccountmanagement&id=".$data->id."\"><i class='fa fa-trash'></i></a></td>";
        
        echo "</tr>";
    }
?>
</table>
</div>

<?php 
    if ($resultData->next_page_url != null) {
        echo '<div class="pagination"><ul><li class="next"><a href="profil.php?p=accountmanagement&url='.$resultData->next_page_url.'">Next</a></li>';
    }

    if ($resultData->prev_page_url != null) {
        echo '<li class="prev"><a href="profil.php?p=accountmanagement&url='.$resultData->prev_page_url.'">Previous</a></li></ul></div>';
    }
?>
