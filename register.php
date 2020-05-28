<?php
   include("config.php");
   session_start();
   
 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     $image=addslashes(file_get_contents($_FILES['slika']['tmp_name']));



      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      $mygod = mysqli_real_escape_string($db,$_POST['god']);
      $myemail = mysqli_real_escape_string($db,$_POST['email']); 
      $myfax = mysqli_real_escape_string($db,$_POST['fax']);
      $mybr = mysqli_real_escape_string($db,$_POST['br']);
      
    
      
      $sql = "SELECT idkorisnici FROM korisnici WHERE username = '$myusername'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         
        $_SESSION['error'] = "Корисничкото име е веќе зафатено,изберете друго!";
      }else {
        if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["god"]) || empty($_POST["email"]) || empty($_POST["fax"]) || empty($_POST["br"])) {
            $_SESSION['error']="Сите места мораат да бидат пополнети!";
        
        }
        else if (!preg_match('/^[0-9]*$/', $mygod)) {
            $_SESSION['error']="Внесете само бројки!";
        
        }
        else if (!preg_match('/^[0-9]*$/', $mybr)) {
          $_SESSION['error']="Внесете само бројки!";
      
      }
        else {
            $dbi->query("INSERT INTO korisnici (username,password,god,email,fax,slika) VALUES('$myusername','$mypassword','$mygod','$myemail','$myfax','$image')");
            $dbi->query("INSERT INTO karticki (br,ime) VALUES('$mybr','$myusername')");
            //header("location: index.php"); 
            $_SESSION['error']="Успешна регистрација!";
        }
       
      }
   }
   header("location: index.php"); 
?>
