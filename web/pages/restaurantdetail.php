<?php 

include 'connect.php';

$id= $_GET["id"];
$sql= "SELECT * FROM tbl_restaurant WHERE restaurant_id=".$id."";
$hasil = $connect->query($sql);

while($row = mysqli_fetch_assoc($hasil))
		{
                       echo '<h1>'.$row['restoran_nama'].'</h1>';
                       echo '<p>'.$row['description'].'</p>';
                        echo '<img  src= "data:image/png;base64,'.base64_encode( $row['restoran_image'] ).'"height="250" width="400"/>';
}

?>




