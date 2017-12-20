<img class="gambar" src="images/img3.jpg" alt="">
<h1 style="padding-bottom:30px"> Review List </h1>
<?php 


//     $user_name="root"; 
//     $password="";
//     $host_name="localhost"; 
    
//     $con= mysqli_connect($host_name,$user_name,$password); 
//     mysqli_select_db($con,'project_apsi') or die(mysqli_error($con));
    
       
//     if($con) {
//             if(isset($_SESSION['username']))
//     {
//         $sql = "SELECT * FROM tbl_user WHERE username = '".$_SESSION['username']."'"; 
//         $result = mysqli_query($con,$sql); 
        
//         while($row = mysqli_fetch_assoc($result))
//         {       
//                         $usernameget = $row['user_id'];
                   
                      
//         }
//         }
// }
?>
<?php
    if (isset($_SESSION['is_admin'])) {
        $isadmin = 1;
    } else {
        $isadmin = 0;
    }
?>
<?php
// include 'connect.php';
include 'connectGuzzle.php';
if (!isset($_GET['url'])) {
    $url = "http://localhost:8000/api/v1/review/get";
} else {
    $url = $_GET['url'];
}

// if($isadmin==1){
// $sql= "SELECT * FROM tbl_review JOIN tbl_user ON tbl_review.user_id = tbl_user.user_id JOIN tbl_restaurant ON tbl_restaurant.restaurant_id = tbl_review.restaurant_id  ORDER BY review_id ASC LIMIT $startrow, 10";
// }
// else { 
// $sql= "SELECT * FROM tbl_review JOIN tbl_user ON tbl_review.user_id = tbl_user.user_id JOIN tbl_restaurant ON tbl_restaurant.restaurant_id = tbl_review.restaurant_id  WHERE tbl_review.user_id= ".$usernameget." ORDER BY review_id ASC LIMIT $startrow, 10";
// }
$client = new GuzzleHttp\Client();

$response = $client->request('GET', $url, $headers);

$result = json_decode($response->getBody()->getContents());
$resultData = $result->data;
$datas = $resultData->data;
// $hasil = $connect->query($sql);

?>
<div class="table-responsive">
<table class="table table-striped">
<tr> 
<th class="thheader"> Review Id </th>
<th class="thheader"> Review Content </th>
<th class="thheader"> Restaurant Name </th> 
<th class="thheader"> Reviewed by </th> 
 <th class="thheader">  </th> 
</tr>
<?php
// if($hasil === false) {
//     trigger_error('Perintah SQL salah: ' . $sql . ' Error: ' . $mysqli->error, E_USER_ERROR);
// } else {
//     while($data = $hasil->fetch_array()){
    foreach ($datas as $data) {
        echo "<tr>";
        echo "<td>$data->id</td>";
        echo "<td>$data->content</td>";
                echo "<td>".(string)$data->restaurant->name."</td>";
                echo "<td>".(string)$data->user->name."</td>";
                echo "<td><a href=\"profil.php?p=deletereview&id=".$data->id."\"><i class='fa fa-trash'></i></a></td>";
        echo "</tr>";
    }
// }
?>
</table>
</div>

<?php 
    if ($resultData->next_page_url != null) {
        echo '<div class="pagination"><ul><li class="next"><a href="profil.php?p=reviewlist&url='.$resultData->next_page_url.'">Next</a></li>';
    }

    if ($resultData->prev_page_url != null) {
        echo '<li class="prev"><a href="profil.php?p=reviewlist&url='.$resultData->prev_page_url.'">Previous</a></li></ul></div>';
    }
?>



