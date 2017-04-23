<?php
include "config.php";
$mode   = "";
$nhiet_do   = "";
$do_am_dat ="";
$do_am_kk ="";
$dong_co2="";
$dong_co1="";



if (isset($_GET['mode'])) {
	$mode  = $_GET['mode'];
}

if (isset($_GET['nhiet_do'])) {
	$nhiet_do  = $_GET['nhiet_do'];
}

if (isset($_GET['do_am_dat'])) {
	$do_am_dat  = $_GET['do_am_dat'];
}

if (isset($_GET['do_am_kk'])) {
	$do_am_kk =  $_GET['do_am_kk'];
}
if (isset($_GET['dong_co1'])) {
	$dong_co1  = $_GET['dong_co1'];
}
if (isset($_GET['dong_co2'])) {
	$dong_co2  =(int)($_GET['dong_co2']);
}

	$sql = " INSERT INTO nong_nghiep (`time`, mode, nhiet_do, do_am_dat, do_am_kk, dong_co1, dong_co2) 
					VALUES (NOW(),'$mode','$nhiet_do','$do_am_dat','$do_am_kk','$dong_co1','$dong_co2') ";

	if (mysqli_query($con,$sql)){
		echo "SUCCESS";
	}else
	{
		echo "FAIL1";
	}


?>
