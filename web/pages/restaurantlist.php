<img class="gambar" src="images/img3.jpg" alt="">
<h1 style="padding-bottom:30px"> Restaurant List </h1>
<?php
include 'connect.php';
if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
  $startrow = 0;
} else {
  $startrow = (int)$_GET['startrow'];
}

$sql= "SELECT * FROM tbl_restaurant ORDER BY restoran_nama ASC LIMIT $startrow, 10";
$hasil = $connect->query($sql);

?>
<div class="table-responsive">
<table class="table table-striped">
<tr> 

<th class="thheader"> Restaurant Name </th>
<th class="thheader"> Description </th> 
<th class="thheader">  </th> 
</tr>
<?php
if($hasil === false) {
	trigger_error('Perintah SQL salah: ' . $sql . ' Error: ' . $mysqli->error, E_USER_ERROR);
} else {
	while($data = $hasil->fetch_array()){
		echo "<tr>";
                echo "<td><a href=\"profil.php?p=restaurantdetail&id=".$data['restaurant_id']."\">".$data['restoran_nama']."</a></td>";
                //echo '<td><a href="profil.php?p=restaurantdetail&id="'.$data['restaurant_id'].'"">'.$data['restoran_nama'].'</a></td>';
                echo "<td>$data[description]</td>";
                echo "<td><a href=\"profil.php?p=deleterestaurant&id=".$data['restaurant_id']."\"><i class='fa fa-trash'></i></a></td>";
		echo "</tr>";
	}
}
?>
</table>
</div>

<?php 
echo '<div class="pagination"><ul><li class="next"><a href="profil.php?p=restaurantlist&startrow='.($startrow+10).'">Next</a></li>';

$prev = $startrow - 10;

if ($prev >= 0)
    echo '<li class="prev"><a href="profil.php?p=restaurantlist&startrow='.$prev.'">Previous</a></li></ul></div>';
?>

<a href="profil.php?p=addrestaurant"><button class="button-blue"> Create New </button></a>






