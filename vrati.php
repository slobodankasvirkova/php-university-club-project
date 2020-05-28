<?php
include('session.php');
$url = $_SERVER['QUERY_STRING'];
parse_str($url, $arr);
if($arr!=null){
    $id = $arr["id"];
    $null=0;

    $db->query("DELETE FROM report  where '$id'=id_post");}
    header("location:report2.php");
?>