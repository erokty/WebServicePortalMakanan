<?php
include('conf/other/header_1.php'); 


?>



<?php include 'connect.php';
$queryisadmin = "SELECT * FROM tbl_user WHERE username= '".$_SESSION['username']."' AND is_admin= 1";
$runquery2=$connect->query($queryisadmin);

 if($runquery2->num_rows > 0) { 
   while($row = mysqli_fetch_assoc($runquery2))
		{
	 $isadmin = $row['is_admin'] ; 
    }
    }
    else { $isadmin = 0;} 
?>

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
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active"><?php echo $_SESSION['username'] ?></li>
		</ol>
	</div>
        <!-- //breadcrumb -->
<section class="containermenu"> 
        <!--menu-->
<div class="navigationmenuprofile" width="30%">
  <ul class="mainmenu">
    <li><a href="profil.php?p=myprofile"><i class="fa fa-user fa-fw" aria-hidden="true"></i> My Profile</a></li>
    <li><a href="profil.php?p=articlelist"><i class="fa fa-file-o fa-fw" aria-hidden="true"></i>Article List</a></li>
    <li><a href="profil.php?p=reviewlist"><i class="fa fa-commenting-o fa-fw" aria-hidden="true"></i>Review List</a></li>
       <?php if($isadmin == 1): ?>                                               
    <li><a href="profil.php?p=restaurantlist"><i class="fa fa-cutlery fa-fw" aria-hidden="true"></i>Restaurant List</a></li>
     <li><a href="profil.php?p=accountmanagement"><i class="fa fa-users fa-fw" aria-hidden="true"></i>Account Management</a></li>

       
        <?php endif; ?>
      </ul>
    </li>
  </ul>
</div>
        <!--menu-->
<!--content-->
        <div class="content" width="70%">
            <?php 
            
            $pages_dir='pages';
            if(!empty($_GET['p'])){
                $pages= scandir($pages_dir,0);
                unset($pages[0],$pages[1]);
                
                $p = $_GET['p'];
                if(in_array($p.'.php',$pages))
            {include($pages_dir.'/'.$p.'.php');}
            
            else{
                echo "Halaman tidak ditemukan"; 
            }
            }
            else{
                include($pages_dir.'/myprofile.php');
            }
            ?>
            
        </div>
</section>
    
	
	
<!--content-->
</body>

</html>