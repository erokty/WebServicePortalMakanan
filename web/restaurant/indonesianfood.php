<?php 

	
	$user_name="root"; 
	$password="";
	$host_name="localhost"; 
	
	$con= mysqli_connect($host_name,$user_name,$password); 
	mysqli_select_db($con,'project_apsi') or die(mysqli_error($con));
          
	?>
     
                <?php 
	if($con) 
	{
           
                $sql= "SELECT * FROM tbl_groupingrestaurant JOIN tbl_grouping ON tbl_groupingrestaurant.grouping_id = tbl_grouping.grouping_id JOIN tbl_restaurant ON tbl_groupingrestaurant.restaurant_id = tbl_restaurant.restaurant_id WHERE tbl_grouping.grouping_id=1"; 
		$result= mysqli_query($con,$sql); 
		
		while($row = mysqli_fetch_assoc($result))
		{
                    echo '<div class="col-xs-6 col-sm-4 product-grids">';
						echo '<div class="flip-container">';
							echo'<div class="flipper agile-products">';
								echo'<div class="front">';
                                                                
									echo'<img src= "data:image/png;base64,'.base64_encode( $row['restoran_image'] ).'"  height="200px" width="323px" display ="block" alt="img" >';
									echo'<div class="agile-product-text">';              
										echo"<h5>".$row['restoran_nama']."</h5>";
									echo'</div>'; 
								echo'</div>';
								echo'<div class="back">';
									echo"<h4>".$row['restoran_nama']."</h4>";
									echo'<p>'.$row['description'].'</p>';
									  echo "<td><a href=\"restaurant.php?p=menudetail&id=".$row['restaurant_id']."\"> See Detail</a></td>";
									
								echo'</div>';
							echo'</div>';
						echo'</div> ';
					echo'</div> ';
                       /* echo '<tr><td rowspan = "3"><img  src= "data:image/png;base64,'.base64_encode( $row['restoran_image'] ).'"height="250" width="400"/></td></tr>';
                        echo '<tr><td><h3>'.$row['restoran_nama'].'</h3></td></tr>';
                        echo '<tr><td rowspan ="2">'.$row['description'].'</td></tr>';
                     */
                        
                }
                 }else {
                     echo  '<tr><td><h1 align="left">Result not found</h1></td></tr>';
                 }
            
        
        
            ?>

