<?php
include("session.php");
$pom3=$_SESSION["login_user"];
if(!(empty($_POST["sodrzina"]))){

    $poraka= mysqli_real_escape_string($db,$_POST['sodrzina']);
    date_default_timezone_set('Germany/Berlin');
    $date = date('d/m/Y h:i:s a', time());
    $nuli=0;
$fax=$_POST["fax"];
    $db->query("INSERT INTO postovi (idkorisnik,sodrzina,data,pozitiveng,fax) VALUES('$pom3','$poraka','$date','$nuli','$fax')");


}


header("location: welcome.php"); 

?>