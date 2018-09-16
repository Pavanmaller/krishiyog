<?php

include 'db_connect.php';
$tan=$_POST['tan'];
$pan=$_POST['pan'];
$gst=$_POST['gst'];
$userid=$_POST[''];
$category=$_POST[''];
$message=$_POST['message'];

$query="INSERT INTO buyerenq(gst,tan,pan,message) VALUES('".$gst."','".$tan."','".$pan."','".$message."')";
mysqli_query($connection,$query);
header("Location:index.html");
 ?>
