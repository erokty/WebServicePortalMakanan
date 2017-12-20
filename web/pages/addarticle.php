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
// 
?>   
<?php
    
// include('connect.php'); 
include 'connectGuzzle.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['article_title']) && isset($_POST['article_content'])) { 
        
        $articletitle = $_POST['article_title']; 
        $articlecontent = $_POST['article_content'];
        

        $client = new GuzzleHttp\Client();

        $url = "http://localhost:8000/api/v1/article/create";

        $header = array('Authorization'=>'Bearer ' . $_SESSION['access_token']);

        $data = ['title' => $articletitle, 'content' => $articlecontent];

        $response = $client->post($url, ['query' => $data, 'headers' => $header]);

        $result = json_decode($response->getBody()->getContents());
        // sqlinsertreview="INSERT INTO tbl_article(user_id, article_title,article_content) VALUES ('$usernameget','$articletitle','$articlecontent')";
             
            if($result->status_code != 200) { 
              trigger_error('An error occured.');
            } else {
                echo '<meta http-equiv="refresh" content="1;url=profil.php?p=articlelist"/>';
            }
        
    }
} ?> 

  <form action="#" method="post"> 
      <div class="tableartikelpadding">
      <div class="table-responsive">
      <table>
          <tr><td class="paddingtd"> Article Title </td> <td> <input class="agile-ltext" type="text" name="article_title" placeholder="Article Title" required="" maxlength="20"></td></tr>
      
          <tr><td class="paddingtd"> Content</td> <td><textarea class="agile-1text" rows="15"  cols= "150" name="article_content" placeholder="Article Content" required="" maxlength="63000"></textarea></td></tr>
                                              
     <div class="wthreelogin-text"> 
      
      <div class="clearfix"> </div>
     </div>   
          <tr><td colspan ="2" align="right" class="warnabutton"><input type="submit" value="Submit"> </td> </tr>
      </table>
     </div>
      </div>
    </form>


