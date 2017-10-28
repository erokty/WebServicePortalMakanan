<img class="gambar" src="images/img3.jpg" alt="">
<h1 style="padding-bottom:30px"> Account Management</h1>
<?php
include 'connect.php';
if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
  $startrow = 0;
} else {
  $startrow = (int)$_GET['startrow'];
}

$sql= "SELECT * FROM tbl_user ORDER BY username ASC LIMIT $startrow, 10";
$hasil = $connect->query($sql);


 
?>
<div class="table-responsive">
<table class="table table-striped">
<tr> 

<th class="thheader"> Username </th>
<th class="thheader"> Name </th> 
<th class="thheader"> Address </th> 
<th class="thheader"> Birth Date </th> 
<th class="thheader"> Phone Number </th> 
<th class="thheader"> Email </th> 
<th class="thheader"> </th>

 
</tr>
<?php
if($hasil === false) {
	trigger_error('Perintah SQL salah: ' . $sql . ' Error: ' . $mysqli->error, E_USER_ERROR);
} else {
	while($data = $hasil->fetch_array()){
		echo "<tr>";
		
		echo "<td>$data[username]</td>";
                echo "<td>$data[name]</td>";
                echo "<td>$data[address]</td>";
                echo "<td>$data[birth_date]</td>";
                echo "<td>$data[phone_number]</td>";
                 echo "<td>$data[email]</td>";
                echo "<td><a href=\"profil.php?p=deleteaccountmanagement&id=".$data['user_id']."\"><i class='fa fa-trash'></i></a></td>";
                
		echo "</tr>";
	}
}
?>
</table>
</div>
<?php 
echo '<div class="pagination"><ul><li class="next"><a href="profil.php?p=accountmanagement.php?startrow='.($startrow+10).'">Next</a></li>';

$prev = $startrow - 10;

//only print a "Previous" link if a "Next" was clicked
if ($prev >= 0)
    echo '<li class="prev"><a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'">Previous</a></li></ul></div>';
?>

