<?php
 include'../api/config.php';
$up_mode = '';
$st_value = '';

if (isset($_GET['status_value'])) {
	$st_value  = $_GET['status_value'];
}

if (isset($_GET['update_mode'])) {
	$up_mode  = $_GET['update_mode'];
	if($up_mode == 1){
		$update = " UPDATE nong_nghiep   SET dong_co1 =  '".$st_value."'  WHERE id = 1";    
			mysqli_query($con,$update);
			header("location: ../index.php");
	}
		if($up_mode == 2){
		$update = " UPDATE nong_nghiep   SET dong_co2 =  '".$st_value."'  WHERE id = 1";    
			mysqli_query($con,$update);
			header("location: ../index.php");
	}
		if($up_mode == 3){
		$update = " UPDATE nong_nghiep   SET mode =  '".$st_value."'  WHERE id = 1";    
			mysqli_query($con,$update);
			header("location: ../index.php");
	}
}

?>
