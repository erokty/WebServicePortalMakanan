
<!DOCTYPE html>
<html lang="en">
<head>
<title>Staple Food a Restaurants Category Bootstrap Responsive website Template | About :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Staple Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one --> 
				<div class="container">
					
					<div class="w3ls-header-right">
						<ul> 
                                                    
                                                   
							<li class="head-dpdn">
                                                      <?php if(isset($_SESSION['username'])): ?>
                                                            <a class="link" href="profil.php" > <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION["username"]; ?> </a> </li>
                                                        <li> <a class="link" href="logout.php" > <i class="fa fa-sign-out" aria-hidden="true"></i> Sign out  </a> </li>
                                                    <?php else: ?>
                                                     <a class="link" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>login</a>
                                                     </li> 
							<li class="head-dpdn">
								<a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign up</a>
							</li> 
                                                                <?php endif; ?>
								
                                                          
							
							<li class="head-dpdn">
								<a href="offers.php"><i class="fa fa-gift" aria-hidden="true"></i> Offers</a>
							</li> 
                                                   
							
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!-- //header-one -->    
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>  
							<h1><a href="index.php">BF-Port<span>Batam Food Portal</span></a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php" class="active">Home</a></li>	
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Restaurants <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Food Categories</h6>  
													  <li><a href="restaurant.php?p=indonesianfood"> Indonesian Food  </a> </li>
                                                                                                         <li><a href="restaurant.php?p=chinesefood"> Chinese Food  </a> </li>
                                                                                                            <li><a href="restaurant.php?p=japanesefood">Japanese Food  </a> </li>
                                                                                                            <li><a href="restaurant.php?p=koreanfood"> Korean Food  </a> </li>
                                                                                                            <li><a href="restaurant.php?p=thailandfood">Thailand Food  </a> </li>
                                                                                                           <li> <a href="restaurant.php?p=middleeasternfood"> Middle Eastern Food </a></li>
                                                                                                            <li><a href="restaurant.php?p=vegetarianfood"> Vegetarian Food </a></li>
                                                                                                            <li><a href="restaurant.php?p=fastfood"> Fast Food </a></li>
												</ul>
											</div>
										
											<div class="clearfix"></div>
										</div>
									</ul>
					
								</li>
								
                                                                <li class="w3pages"><a href="article.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Article</a>
								
								</li>  
									<li><a href="about.php">About</a></li> 
		
							</ul>
						</div>
						<div class="cart cart box_1"> 
							<form action="#" method="post" class="last"> 
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="display" value="1" />
				
							</form>   
						</div> 
					</nav>
				</div>
			</div>
			<!-- //navigation --> 
		</div>
		<!-- //header-end --> 

		<!-- banner-text -->
		<div class="banner-text">	
			<div class="container">
				<h2>What Are you Craving for? <br> <span>We'll Recommend the best for you.</span></h2>
				<div class="agileits_search">
					<form action="search.php" method="post">
						<input name="search" type="text" placeholder="Search Here" required="">
						<select id="agileinfo_search" name="select" required="">
                                                    <option selected value="restaurant">Restaurant</option>
							<option value="food">Food</option>
						</select>
						
						<input type="submit" value="search">
					</form>
				</div> 
			</div>
		</div>
	</div>
	<!-- //banner -->  
<?php 




	$user_name="root"; 
	$password="";
	$host_name="localhost"; 
	
	$con= mysqli_connect($host_name,$user_name,$password); 
	mysqli_select_db($con,'project_apsi') or die(mysqli_error($con));
          $search = $_POST['search'];
          $select = $_POST['select'];
          
	?>
      
           
                <?php 
	if($con) 
	{
            if($select == "restaurant"){
                echo '<div class ="table-responsive">';
                 echo'<table class="table" style="width:70%">';
		$sql = "SELECT * FROM tbl_restaurant WHERE restoran_nama LIKE '$search%'"; 
		$result = mysqli_query($con,$sql); 
		 if($result->num_rows>0){
		while($row = mysqli_fetch_assoc($result))
		{       
                        echo '<tr><td rowspan = "4"><img  src= "data:image/png;base64,'.base64_encode( $row['restoran_image'] ).'"height="250" width="400"/></td></tr>';
                        echo '<tr><td><h3>'.$row['restoran_nama'].'</h3></td></tr>';
                        echo '<tr><td rowspan ="2">'.$row['description'].'</td></tr>';
                        echo "<tr><td><a href=\"restaurant.php?p=menudetail&id=".$row['restaurant_id']."\"> Detail</a></td></tr>";
                        
                }
                 }else {
                     echo  '<tr><td><h1 align="left">Result not found</h1></td></tr>';
                 }

}
                else if ($select == "food"){
                    echo '<div class ="table-responsive">';
                     echo'<table class="table table-striped" style="width:100%">';
                     echo '<tr ><th class="thheader"> Nama Menu </th> <th class="thheader">Harga </th> <th class="thheader"> Description</th> <th class="thheader"> </th> </tr>';
		$sql = "SELECT * FROM tbl_menu JOIN tbl_restaurant ON tbl_menu.restaurant_id = tbl_restaurant.restaurant_id WHERE menu_nama LIKE '$search%'"; 
		$result = mysqli_query($con,$sql); 
		 if($result->num_rows>0){
		while($row = mysqli_fetch_assoc($result))
		{
			
                        echo '<tr><td><p>'.$row['menu_nama'].'</p></td>';
                        echo '<td >'.$row['harga'].'</td>';
                        echo '<td>'.$row['description'].'</td>';
                        echo "<td><a href=\"restaurant.php?p=menudetail&id=".$row['restaurant_id']."\"> Detail</a></td>";
                 
                }
                 }else {
                     echo "<tr><td><h1> Result not found</h1></td></tr>";
                 }

        }
        }
        ?>
            </table>
        </div>
</html>