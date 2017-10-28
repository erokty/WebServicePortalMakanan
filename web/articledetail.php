


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

<body> 
    <!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Article</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
        <div class="article">
    <div class="table-responsive">
        <table class="table">
    <?php 
    

    include 'connect.php';

$id= $_GET["id"];
$sql= "SELECT * FROM tbl_article WHERE article_id=1";
$hasil = $connect->query($sql);

while($row = mysqli_fetch_assoc($hasil))
		{
                     
                        //echo '<tr><td rowspan = "3"><img  src= "data:image/png;base64,'.base64_encode( $row['restoran_image'] ).'"height="250" width="400"/></td></tr>';
                        echo '<tr><td><h3>'.$row['article_title'].'</h3></td></tr>';
                        echo '<tr><td rowspan ="2">'.$row['article_content'].'</td></tr>';
                     
                        
                }
              
    ?>
            
        </table>
    </div>
        </div>
</body>

