<?php
   include("config.php");
   session_start();
   $error=" ";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT idkorisnici FROM korisnici WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $sql = "SELECT * FROM korisnici WHERE username = '$myusername'";
         $_SESSION['login_user'] = $myusername;
         $_SESSION['moderator']=0;
         $result = mysqli_query($db,$sql);
         while($row =mysqli_fetch_row($result)){
            $mod=$row[7];}
            $_SESSION['moderator']=$mod;
         $_SESSION["izbor"]=0;
         header("location: welcome.php");
      }else {
        $_SESSION['error'] = "Вашето корисничко име или лозинка не се точни";
        header("location: index.php");
      }
   }
?>
