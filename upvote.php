<?php
include("session.php");
$url = $_SERVER['QUERY_STRING'];
$login=$_SESSION["login_user"];
      parse_str($url, $arr);
      
      if($arr!=null){
        $id = $arr["id"];
        $pom="SELECT * FROM postovi WHERE '$id'=idpostovi";
        $rezultat=mysqli_query($db,$pom);
        while($row =mysqli_fetch_row($rezultat)){
        $br=$row[4];}
        $pom="SELECT * FROM votes WHERE '$login'=idkorisnik and '$id'=idpost";
        $rezultat=mysqli_query($db,$pom);
        $row = mysqli_fetch_array($rezultat,MYSQLI_ASSOC);
$count = mysqli_num_rows($rezultat);
if($count==1){
  $pom=" DELETE FROM votes WHERE '$login'=idkorisnik and '$id'=idpost";
  $db->query($pom);
$br=$br-1;
}else{ $pom=" INSERT INTO votes (idkorisnik,idpost) VALUES ('$login','$id')";
  $db->query($pom);

        $br=$br+1;}
          
        $upvote = "UPDATE postovi set pozitiveng='$br' WHERE idpostovi='$id'";
        $db->query($upvote);}
        header("location:welcome.php");


?>