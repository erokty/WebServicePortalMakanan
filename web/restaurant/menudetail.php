
 
    
    <div class="table-responsive">
        <table class="table">
    <?php 

    include 'connect.php';

$mid= $_GET['id'];
$sql= "SELECT * FROM tbl_restaurant  WHERE restaurant_id=".$mid."";
$hasil = $connect->query($sql);

while($row = mysqli_fetch_assoc($hasil))
		{
                     
                        echo '<tr><td rowspan = "3"><img  src= "data:image/png;base64,'.base64_encode( $row['restoran_image'] ).'"height="250" width="400"/></td></tr>';
                        echo '<tr><td><h3>'.$row['restoran_nama'].'</h3></td></tr>';
                        echo '<tr><td rowspan ="2">'.$row['description'].'</td></tr>';
                     
                }
    ?>
            
        </table>
    </div>
    
   
  <h3 padding-bottom="30px"> Menu </h3>
   
    <div class ="table-responsive">
        <table class="table">
            <tr><th class="thheader"> Nama Menu </th>
                <th class="thheader"> Harga </th> </tr>
    <?php 

    include 'connect.php';

$mid= $_GET['id'];
$sql= "SELECT * FROM tbl_restaurant JOIN tbl_menu ON tbl_restaurant.restaurant_id = tbl_menu.restaurant_id  WHERE tbl_restaurant.restaurant_id=".$mid."";
$hasil = $connect->query($sql);

while($row = mysqli_fetch_assoc($hasil))
		{
                     
                      
                        echo '<tr><td>'.$row['menu_nama'].'</td>';
                        echo '<td>'.$row['harga'].'</td></tr>';
                     
                }
    ?>
        </table>
    </div>
  
   <h3 padding-bottom="30px"> Review </h3>
   
    <div class ="table-responsive">
        <table class="table table-striped">
           
    <?php 

    include 'connect.php';

$mid= $_GET['id'];
$sqlreview= "SELECT * FROM tbl_review JOIN tbl_user ON tbl_review.user_id = tbl_user.user_id JOIN tbl_restaurant ON tbl_review.restaurant_id = tbl_restaurant.restaurant_id WHERE tbl_restaurant.restaurant_id=".$mid." ";
$hasilreview = $connect->query($sqlreview);

while($row = mysqli_fetch_assoc($hasilreview))
		{
                     
                      
                        echo '<tr><td><h5>'.$row['username'].'</h5></td></tr>';
                        echo '<tr><td>'.$row['review_content'].'</td></tr>';
                     
                }
    ?>
        </table>
    </div>
   
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
    <?php
    
include('connect.php'); 

if(
        
        $_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['review_content'])){ 
		$reviewcontent = $_POST['review_content']; 
		 
			$sqlinsertreview="INSERT INTO tbl_review (user_id, restaurant_id,review_content,rating) VALUES ('$usernameget','$mid','$reviewcontent',0)";
			 
			if($connect->query($sqlinsertreview) === false) { 
			  trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
			} else {
                            
                            echo '<meta http-equiv="refresh" content="1;url=restaurant.php?p=menudetail&id='.$mid.'"/>';
			
			}
		
	}
} ?> 
  <?php if(isset($_SESSION['username'])): ?>
  <form action="#" method="post">  
      
      <p>Review</p> 
      <textarea maxlength="255" name="review_content" rows="5" cols="40"></textarea>
      <p><input type ="submit" name ="POST" value ="submit"/></p>
  </form> 
     <?php endif; ?>