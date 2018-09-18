<?php

include 'db_connect.php';
$fname=$_REQUEST['firstName'];
$lname=$_REQUEST['lastName'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$mobile=$_REQUEST['bMobNo'];

$fn=substr($fname,0,2);
$ln=substr($lname,0,2);
$ct=substr($city,0,3);
$st=substr($state,0,3);
$mb=substr($mobile,6);

$getUniqueId = mysqli_query("SELECT firstName,lastName,city,state,bMobNo FROM buyerdb");
$getUniqueId1 = mysqli_num_rows($getUniqueId);

$m=date('m');
$y=date('y');
$d=date('d');

$final_id = $fn.$ln.$ct.$st.$d.$m.$y.$mb;
echo $final_id;

$query = mysqli_query("UPDATE buyerdb
                        SET  ")
mysqli_query($connection,$query);

 ?>
