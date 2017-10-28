<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
                                                            <a class="link" href="logout.php" > <i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo $_SESSION["username"]; ?> (Logout) </a>
                                                    <?php else: ?>
                                                     <a class="link" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>login</a>
                                                                <?php endif; ?>
								
                                                          
							</li> 
							<li class="head-dpdn">
								<a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
							</li> 
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
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Food type</h6>  
													<li><a href="menu.php">Breakfast</a></li> 
													<li><a href="menu.php">Lunch</a></li> 
													<li><a href="menu.php">Dinner</a></li> 
												</ul>
											</div>
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Cuisine</h6> 
													<li><a href="menu.php">Indian Recipes</a></li> 
													<li><a href="menu.php">American Recipes</a></li> 
													<li><a href="menu.php">French Recipes</a></li> 
													<li><a href="menu.php">Italian Recipes</a></li> 
												</ul>
											</div>
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Box type</h6> 
													<li><a href="menu.php">Diet</a></li> 
													<li><a href="menu.php">Mini</a></li> 
													<li><a href="menu.php">Regular</a></li> 
													<li><a href="menu.php">Special</a></li> 
												</ul>
											</div> 
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								
								<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Article</a>
								
								</li>  
									<li><a href="about.php">About</a></li> 
                                                                      
							</ul>
						</div>
						
						</div> 
					</nav>
				</div>
			</div>
			<!-- //navigation --> 
		</div>
		<!-- //header-end --> 
</body>
</html>