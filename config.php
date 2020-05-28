<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'aplikacija');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $dbi= new mysqli("localhost","root","","aplikacija");
   mysqli_set_charset($db,'utf8');
   mysqli_set_charset($dbi,'utf8');
?>