<?php
$host="localhost";
$username="root";
$password="";
$dbname="kriptogtafides";

$koneksi=mysql_connect($host,$username,$password) or die (mysql_error());
$pilihdatabase=mysql_select_db($dbname,$koneksi);
?>