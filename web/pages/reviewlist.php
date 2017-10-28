<img class="gambar" src="images/img3.jpg" alt="">
<h1 style="padding-bottom:30px"> Review List </h1>
<?php 



	$user_name="root"; 
	$password="";
	$host_name="localhost"; 
	
	$con= mysqli_connect($host_name,$user_name,$password); 
	mysqli_select_db($con,'project_apsi') or die(mysqli_error($con));
	
       
	if($con) {
            if(isset($_SESSION['username']))
	{
		$sql = "SELECT * FROM tbl_user WHERE username = '".$_SESSION['username']."'"; 
		$result = mysqli_query($con,$sql); 
		
		while($row = mysqli_fetch_assoc($result))
		{       
                        $usernameget = $row['user_id'];
                   
                      
		}
        }
}
?>
<?php include 'connect.php';
$queryisadmin = "SELECT * FROM tbl_user WHERE username= '".$_SESSION['username']."' AND is_admin= 1";
$runquery2=$connect->query($queryisadmin);

 if($runquery2->num_rows > 0) { 
   while($row = mysqli_fetch_assoc($runquery2))
		{
	 $isadmin = $row['is_admin'] ; 
    }
    }
    else { $isadmin = 0;} 
?>
<?php
include 'connect.php';
if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
  $startrow = 0;
} else {
  $startrow = (int)$_GET['startrow'];
}

if($isadmin==1){
$sql= "SELECT * FROM tbl_review JOIN tbl_user ON tbl_review.user_id = tbl_user.user_id JOIN tbl_restaurant ON tbl_restaurant.restaurant_id = tbl_review.restaurant_id  ORDER BY review_id ASC LIMIT $startrow, 10";
}
else { 
$sql= "SELECT * FROM tbl_review JOIN tbl_user ON tbl_review.user_id = tbl_user.user_id JOIN tbl_restaurant ON tbl_restaurant.restaurant_id = tbl_review.restaurant_id  WHERE tbl_review.user_id= ".$usernameget." ORDER BY review_id ASC LIMIT $startrow, 10";
}

$hasil = $connect->query($sql);

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
if($hasil === false) {
	trigger_error('Perintah SQL salah: ' . $sql . ' Error: ' . $mysqli->error, E_USER_ERROR);
} else {
	while($data = $hasil->fetch_array()){
		echo "<tr>";
		echo "<td>$data[review_id]</td>";
		echo "<td>$data[review_content]</td>";
                echo "<td>$data[restoran_nama]</td>";
                echo "<td>$data[username]</td>";
                echo "<td><a href=\"profil.php?p=deletereview&id=".$data['review_id']."\"><i class='fa fa-trash'></i></a></td>";
		echo "</tr>";
	}
}
?>
</table>
</div>

<?php 
echo '<div class="pagination"><ul><li class="next"><a href="profil.php?p=restaurantlist.php?startrow='.($startrow+10).'">Next</a></li>';

$prev = $startrow - 10;

//only print a "Previous" link if a "Next" was clicked
if ($prev >= 0)
    echo '<li class="prev"><a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'">Previous</a></li></ul></div>';
?>



