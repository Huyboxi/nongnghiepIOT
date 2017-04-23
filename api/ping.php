 <?php
 if(isset($_GET['ping'])){
    $kn = mysqli_connect('localhost','root','','nong_nghiep');

    $sql = "SELECT * From nong_nghiep ORDER BY id  LIMIT 0 , 1";

    $query = mysqli_query($kn,$sql);
    $ht = array();
    while ($row = mysqli_fetch_assoc($query)){
      $ht[] = $row;
    }

foreach ($ht as $key => $value) {

		 $chuoi = '['.$value['mode'].','.$value['dong_co1'].','.$value['dong_co2'].']';
		 echo $chuoi;
}


 }
 ?>