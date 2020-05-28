<?php
include('session.php');
$pom="SELECT * FROM report";
$result = mysqli_query($db,$pom);
while($row =mysqli_fetch_row($result)){
    $idpost=$row[1];
    $pom2="SELECT * FROM postovi where '$idpost'=idpostovi";
    $result2 = mysqli_query($db,$pom2);
    while($row2 =mysqli_fetch_row($result2)){
    
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row2[6] ).'" height="100px" width="100px" />';
        $id=$row2[0];
  $link ="upvote.php?id=$id";
  $link2="izbrisipost.php?id=$id";
   echo "<b></b><b>$row2[1]</b><br>$row2[2]<br>$row2[3]<a href='$link'>Link</a>  $row2[4]<tr> <a href='$link2'>Report</a> <br><br><br>";
    
    
    
    
    }





}



?>