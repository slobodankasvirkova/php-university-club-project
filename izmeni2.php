<?php
   include("session.php");
   $error=" ";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
   $image=addslashes(file_get_contents($_FILES['slika']['tmp_name']));



    
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    $mygod = mysqli_real_escape_string($db,$_POST['god']);
    $myemail = mysqli_real_escape_string($db,$_POST['email']); 
    $myfax = mysqli_real_escape_string($db,$_POST['fax']);
    $pom3=$_SESSION["login_user"];
   
    $sql = "UPDATE korisnici SET password='$mypassword',god='$mygod',email='$myemail',fax='$myfax',slika='$image' WHERE username = '$pom3'";
    $db->query($sql);
    header("location: profil2.php");
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$active = $row['active'];
    
    //$count = mysqli_num_rows($result);
   }
   
           ?>