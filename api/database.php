  <?php
include "config.php";
$sql = "SELECT * FROM nong_nghiep where id = (SELECT MAX(id) FROM nong_nghiep)" ;
$query = mysqli_query($con,$sql);
$value = mysqli_fetch_array($query); 

$time = $value["time"];

$nhiet_do = $value["nhiet_do"];
$do_am_dat = $value["do_am_dat"];
$do_am_kk = $value["do_am_kk"];

if($value["dong_co1"] == 1) {
  $dong_co1= "ON";
} else {
  $dong_co1 = "OFF";
}
if($value["mode"] ==1 ) {
  $mode= "TỰ ĐỘNG";
} else {
  $mode = "BẰNG TAY";
}
  if($value["dong_co2"]==1){
    $dong_co2 = "ON";
  }else{
    $dong_co2 = "OFF";
  }

?>
