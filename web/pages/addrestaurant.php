<?php 



//  $user_name="root"; 
//  $password="";
//  $host_name="localhost"; 
    
//  $con= mysqli_connect($host_name,$user_name,$password); 
//  mysqli_select_db($con,'project_apsi') or die(mysqli_error($con));
    
       
//  if($con) {
//             if(isset($_SESSION['username']))
//  {
//      $sql = "SELECT * FROM tbl_user WHERE username = '".$_SESSION['username']."'"; 
//      $result = mysqli_query($con,$sql); 
        
//      while($row = mysqli_fetch_assoc($result))
//      {       
//                         $usernameget = $row['user_id'];
                   
                      
//      }
//         }
// }
?>   
<?php
    
// include('connect.php'); 
include 'connectGuzzle.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['restaurant_name']) && isset($_POST['restaurant_name']) && isset($_POST['restaurant_name'])) { 
        $restaurantname = $_POST['restaurant_name']; 
        $description = $_POST['description'];
        $restoran_image = $_FILES['restaurant_image'];
        $client = new GuzzleHttp\Client();

        if(!move_uploaded_file($_FILES['restaurant_image']['tmp_name'], 'upload/' . $_FILES['restaurant_image']['name'])){
            die('Error uploading file - check destination is writeable.');
        }

        $url = "http://localhost:8000/api/v1/restaurant/create";

        $header = array('Authorization'=>'Bearer ' . $_SESSION['access_token']);

        $response = $client->post($url, [
            'headers' => $header,
            'multipart' => [
                [
                    'name' => 'image',
                    'contents' => fopen('upload/' . $_FILES['restaurant_image']['name'], "r")
                ],
                [
                    'name' => 'name',
                    'contents' => $restaurantname
                ],
                [
                    'name' => 'description',
                    'contents' => $description
                ],
            ]
        ]);

        $result = json_decode($response->getBody()->getContents());
            // $sqlinsertreview="INSERT INTO tbl_restaurant(restoran_nama,description,restoran_image) VALUES ('$restaurantname','$description','file_get_contents($restoran_image)')";
             
            // if($result->status_code != 200) { 
            //     trigger_error('An error occured.');
            // } else {
                echo '<meta http-equiv="refresh" content="1;url=profil.php?p=restaurantlist"/>';
            // }
        
    }
} ?> 

<form action="#" method="post" enctype="multipart/form-data"> 
    <div class="tableartikelpadding">
      <div class="table-responsive">
          <table>
     <tr><td class="paddingtd"> Restaurant Name </td> <td><input class="agile-ltext" type="text" name="restaurant_name" placeholder="Name" required="" maxlength="20"> </td></tr>
     <tr><td class="paddingtd"> Description </td> <td><textarea class="textarea" rows="2"  name="description" placeholder="Description" required="" maxlength="255"></textarea> </td></tr>
     
     
     <tr><td class="paddingtd"> File </td> <td><input class="agile-ltext" type="file" id="restaurant_image" name="restaurant_image"> </td></tr>
     <div class="wthreelogin-text"> 
      
      <div class="clearfix"> </div>
     </div>   
     <tr><td colspan ="2" align="right" class="warnabutton"><input type="submit" value="Submit"> </td> </tr>
      </table>
     </div>
      </div>
    </form>




 