<?php 
session_start();

include 'mysql.php';
$sql="SELECT user_id FROM user WHERE user_email='".$_SESSION['email']."'";
$userid=mysqli_query($baglanti,$sql);
$userid = mysqli_fetch_array($userid);
echo $userid['user_id'];
$sql="INSERT INTO rent(rent_B,rent_E,user_id,car_id) VALUES ('".$_GET['rent_B']."','".$_GET['rent_E']."',".$userid['user_id'].",".$_GET['car_id'].")";
echo $sql;
?>