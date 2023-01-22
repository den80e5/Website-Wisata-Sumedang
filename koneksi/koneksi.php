<?php 
 
$host = "localhost";
$user = "root";
$password = "";
$database = "wstsmd";
 
$koneksi = new mysqli($host,$user,$password,$database);
 
if($koneksi->connect_error){
	die("Koneksi gagal");
}
 
?>