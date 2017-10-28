<?php include('conf/other/header.php'); ?>
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
   <!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Article</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
<div class="about">
		<div class="container">
<h3 class="w3ls-title w3ls-title1">Article List</h3>

<?php 



	$user_name="root"; 
	$password="";
	$host_name="localhost"; 
	
	$con= mysqli_connect($host_name,$user_name,$password); 
	mysqli_select_db($con,'project_apsi') or die(mysqli_error($con));
	
	if($con) 
	{
		$sql = "SELECT * FROM tbl_article"; 
		$result = mysqli_query($con,$sql); 
		?>
<div class="article">
<div class="table-responsive" > 
    <table align="center">
    <?php 
		while($row = mysqli_fetch_assoc($result))
		{
                        
                        
			
                        echo "<tr><td class='thheader2'><h3><a href=\"article".$row['article_id'].".php\">".$row['article_title']."</a></h3></td></tr>";
                      echo '<tr><td>'.substr($row['article_content'], 0, 500).'</td></tr>';
                      echo "<tr><td colspan='2' align='right'><a href=\"article".$row['article_id'].".php\"> See Detail</a></td></tr>";
                       //echo "<tr><td colspan='2' align='right'><a href=\"articledetail.php?id=".$row['article_id']."\"> See Detail</a></td></tr>";
                      
                    
		}

}
?>
    </table>
</div>
</div>
                </div>
</div>
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