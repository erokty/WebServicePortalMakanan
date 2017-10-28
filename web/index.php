<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Batam Food Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" typ
      e="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
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
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
								
								<li class="w3pages"><a href="article.php" >Article</a>
								
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
						<input name="search" type="text" placeholder="Enter Your Area Name" required="">
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
   
 
	<!-- add-products -->
	<div class="add-products">  
		<div class="container">
			<div class="add-products-row">
				<div class="w3ls-add-grids">
                                    <a href="restaurant.php?p=menudetail&id=16"> 
						<h4>Get <span>30%<br>Discount</span></h4>
						<h5>Holland Bakery </h5>
						
					</a>
				</div>
				<div class="w3ls-add-grids w3ls-add-grids-right">
					<a href="restaurant.php?p=menudetail&id=34"> 
						<h4>GET Up to<span><br>50% Offer</span></h4>
						<h5>Pizza Hut</h5>
						
					</a>
				</div> 
				<div class="clearfix"> </div> 
			</div>  	 
		</div>
	</div>
	<!-- //add-products --> 
 
	<!-- deals -->
	<div class="w3agile-deals">
		<div class="container">
			<h3 class="w3ls-title">Review</h3>
			<div class="dealsrow">
                            <?php  $user_name="root"; 
                                            $password="";
                                            $host_name="localhost"; 
	
                                             $con= mysqli_connect($host_name,$user_name,$password); 
                                            mysqli_select_db($con,'project_apsi') or die(mysqli_error($con)); 
                                            
                                              $startrowreview = 0;
                                            if($con) 
                                            {
                                            $sql = "SELECT * FROM tbl_review JOIN tbl_user ON tbl_review.user_id = tbl_user.user_id JOIN tbl_restaurant ON tbl_review.restaurant_id = tbl_restaurant.restaurant_id Order by review_id ASC LIMIT $startrowreview, 4"; 
                                                $result = mysqli_query($con,$sql); 
		
                                                while($rowreview = mysqli_fetch_assoc($result))
                                                {
                                                    echo '<div class="col-md-6 col-sm-6 deals-grids"><br>';
                                                    echo '<div class="deals-left"><br>';
                                                    echo '<i class="fa fa-user" aria-hidden="true"></i><br>';
                                                    echo '</div>';
                                                    echo '<div class="deals-right">';
                                                    echo '<h4>'.$rowreview['username'].'</h4>';
                                                     echo '<h4>'.$rowreview['restoran_nama'].'</h4><br>';
                                                    echo '<p>'.$rowreview['review_content'].'</p><br>';
                                                    echo '</div><br>';
                                                    echo '<div class="clearfix"> </div><br>';
                                                    echo '</div>';
                                                    /*  <div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Party Orders</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div> */
                                                
                                                }
                                            }
                                            ?> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //deals --> 
	<!-- dishes -->
	<div class="w3agile-spldishes">
		<div class="container">
			<h3 class="w3ls-title">Our Recomended</h3>
			<div class="spldishes-agileinfo">
				<div class="col-md-3 spldishes-w3left">
					<h5 class="w3ltitle">Favorite Restaurant</h5>
					<p>Here is the popular restaurant in Batam now</p>
				</div> 
				<div class="col-md-9 spldishes-grids">
					<!-- Owl-Carousel -->
					<div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
                                            <!-- tampilkan produk di slideshow--> 
                                            <?php 
                                             $startrow = 0;
                                            if($con) 
                                            {
                                            $sql = "SELECT * FROM tbl_restaurant Order by restoran_nama DESC LIMIT $startrow, 8"; 
                                                $result = mysqli_query($con,$sql); 
		
                                                while($row = mysqli_fetch_assoc($result))
                                                        {
                                                              echo "<a href=\"restaurant.php?p=menudetail&id=".$row['restaurant_id']."\"class='item g1'><br>";
                                                            //echo "<a href='products.php' class='item g1'><br>";
                                                            echo '<img class= "lazyOwl" src= "data:image/png;base64,'.base64_encode( $row['restoran_image'] ).'"/>';
                                                            //echo "<img class='lazyOwl' src=data:restoran_image/jpeg;base64,"'.base64_encode( $row['restoran_image'] ).'"title='Our latest gallery' alt=''/><br>";
                                                            echo "<div class='agile-dish-caption'><br>";
                                                            echo "<h4>".$row['restoran_nama']."</h4><br>";
                                                            echo "<span>".$row['description']. "</span><br>";
                                                            echo "</div>";
						            echo"</a>";
 
                                                                        }

                                                        }
                                                    ?>
						
						
					</div> 
				</div>  
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //dishes --> 
	<!-- subscribe -->
	<div class="subscribe agileits-w3layouts"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>  
				<ul>
					<li><a href="https://www.facebook.com/profile.php?id=100016563154933" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="https://twitter.com/BatamFoodPortal" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="https://www.instagram.com/batamfoodportal/" class="fa fa-instagram icon instagram"> </a></li>
				
				</ul> 
				
			</div> 
		
			<div class="clearfix"> </div> 
		</div>
	</div>
	<!-- //subscribe --> 
	<!-- footer -->
	
	<div class="copyw3-agile"> 
		<div class="container">
			<p>&copy; 2017 Batam Food Portal-Project APSI</p>
		</div>
	</div>
	<!-- //footer --> 
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->	
	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->  
	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>  
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('php,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	  
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>