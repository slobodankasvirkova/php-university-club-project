<?php
include("session.php");
$_SESSION["izbor"]=$_POST["fax"];


header("location: welcome.php");


?>