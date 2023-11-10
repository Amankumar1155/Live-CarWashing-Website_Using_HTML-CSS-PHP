<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE email = '$email' and password = '$mypassword'";
      $res = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($res);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['email'] = $email;
         
         header("location: RGI Admin/index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>