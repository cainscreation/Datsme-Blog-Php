<?php
ob_start();
include_once("db_connect.php");
session_start();
$id=$_GET['id'];
$rview = mysqli_query($conn, "SELECT * FROM vieww");
$ra=mysqli_fetch_assoc($rview);

$ip = file_get_contents('https://api.ipify.org');

if ($ra['ip']!=$ip&&$ra['id']!=$id) {
   $hii=mysqli_query($conn, "INSERT INTO vieww(ip,id) VALUES('" . $ip . "', '" . $id . "')");

echo $ip;
echo $id;

}
else{
  echo "nohello";
}
?>
