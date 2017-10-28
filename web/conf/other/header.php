<!DOCTYPE html>
<?php session_start();


?>


<html>
<head>
	<title></title>
</head>
<body>

<!-- banner -->
	<div class="banner about-w3bnr">
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
								<!-- Mega Menu -->
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
								
								<li class="w3pages"><a href="article.php">Article</a>
								
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
			</div>
		</div>
	</div>
	<!-- //banner -->    
	</body>
    </html>