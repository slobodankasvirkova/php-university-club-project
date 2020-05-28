<?php 
 include('session.php');

 
 $poraka='';
    // username and password sent from form 
    $pom2=$_SESSION["chat"];
    $pom3=$_SESSION["login_user"];
    if(!(empty($_POST["porakaa"]))){
        date_default_timezone_set('Germany/Berlin');
    $date = date('d/m/Y h:i:s a', time());
        $poraka= mysqli_real_escape_string($db,$_POST['porakaa']);
        $db->query("INSERT INTO poraki (idprakac,idprimac,poraka,data) VALUES('$pom3','$pom2','$poraka','$date')");
    }

   

 header("location: poraka3.php"); 
?>