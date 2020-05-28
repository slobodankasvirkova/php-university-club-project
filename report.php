<?php
include('session.php');
$url = $_SERVER['QUERY_STRING'];
parse_str($url, $arr);
if($arr!=null){
    $id = $arr["id"];
    $null=0;
    $db->query("INSERT INTO report (id_post,pregledano) VALUES('$id','$null')");}
    header("location:welcome.php");
?>