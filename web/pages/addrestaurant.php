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
	if(isset($_POST['restaurant_name'])){ 
		$restaurantname = $_POST['restaurant_name']; 
		$description = $_POST['description'];
             
                $restoran_image = $_POST['restaurant_image'];
			$sqlinsertreview="INSERT INTO tbl_restaurant(restoran_nama,description,restoran_image) VALUES ('$restaurantname','$description','file_get_contents($restoran_image)')";
			 
			if($connect->query($sqlinsertreview) === false) { 
			  trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $connect->error, E_USER_ERROR);
			} else {
                           
                                    
                                    
                                    
                             
                            echo '<meta http-equiv="refresh" content="1;url=profil.php?p=restaurantlist"/>';
			
			}
		
	}
} ?> 

<form action="#" method="post"> 
    <div class="tableartikelpadding">
      <div class="table-responsive">
          <table>
     <tr><td class="paddingtd"> Restaurant Name </td> <td><input class="agile-ltext" type="text" name="restaurant_name" placeholder="Name" required="" maxlength="20"> </td></tr>
     <tr><td class="paddingtd"> Description </td> <td><textarea class="textarea" rows="2"  name="description" placeholder="Description" required="" maxlength="255"></textarea> </td></tr>
     
     
     <tr><td class="paddingtd"> File </td> <td><input class="agile-ltext" type="file" name="restaurant_image"> </td></tr>
     <div class="wthreelogin-text"> 
      
      <div class="clearfix"> </div>
     </div>   
     <tr><td colspan ="2" align="right" class="warnabutton"><input type="submit" value="Submit"> </td> </tr>
      </table>
     </div>
      </div>
    </form>




 