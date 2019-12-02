<?php
$servername ="localhost";
$username  ="root";
$password ="1234";
$dbname ="pondokit";

$connect =mysql_connect($server,$username,$password,$dbname);

if(!$connect){
die("koneksi gagal:".mysql_connect_error());
}
?>
