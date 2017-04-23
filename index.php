<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NÔNG NGHIỆP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery.js"></script><script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/refresh.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="ad" align="center">
          <h2><strong> HỆ THỐNG THU THẬP DỮ LIỆU NÔNG NGHIỆP</strong></h2>
    </div>
		
    <?php include 'api/database.php'; ?><br>
		<div id="left">
       		<table class="table table-striped table-hover table-condensed" border="2">
            <caption><h2 class="text-center"  style="color: brown"><strong>THÔNG SỐ HỆ THỐNG</strong></h2></caption>
       			<tr><td><h4>TIME</h4></td><td align="center"><?php echo $time; ?></td></tr>
            <tr><td><h4>CHẾ ĐỘ</h4></td><td align="center"><?php echo $mode; ?></td></tr>
            <tr><td><h4>NHIỆT ĐỘ</h4></td><td align="center"><?php echo $nhiet_do; ?> °C </td></tr>
       			<tr><td><h4>ĐỘ ẨM ĐẤT</h4></td><td align="center"><?php echo $do_am_dat; ?> %</td></tr>
       			<tr><td><h4>ĐỘ ẨM KHÔNG KHÍ</h4><td align="center"><?php echo $do_am_kk; ?> %</td></tr>
            <tr><td><h4>ĐỘNG CƠ 1</h4><td align="center"><?php echo $dong_co1; ?></td></tr>
       			<tr><td><h4>ĐỘNG CƠ 2</h4></td><td align="center"><?php echo $dong_co2; ?></td></tr>
       		</table>
      </div><br>

      <div id="content"> 
        <div align="center">
      		<h2 style="color: brown"><strong>ĐIỀU KHIỂN</strong></h2>
            <button type="button" class="btn btn-success btn-lg" onclick="location.href = 'control/control.php?update_mode=1&status_value=1';""> BẬT ĐỘNG CƠ 1 </button>         
           	<button type="button" class="btn btn-warning btn-lg" onclick="location.href = 'control/control.php?update_mode=1&status_value=0';""> TẮT ĐỘNG CƠ 1  </button>
            <button type="button" class="btn btn-success btn-lg" onclick="location.href = 'control/control.php?update_mode=2&status_value=1';""> BẬT ĐỘNG CƠ 2  </button>
            <button type="button" class="btn btn-warning btn-lg" onclick="location.href = 'control/control.php?update_mode=2&status_value=0';""> TẮT ĐỘNG CƠ 2    </button>
            <button type="button" class="btn btn-success btn-lg" onclick="location.href = 'control/control.php?update_mode=3&status_value=1';""> TỰ ĐỘNG     </button>
            <button type="button" class="btn btn-warning btn-lg" onclick="location.href = 'control/control.php?update_mode=3&status_value=0';""> BẰNG TAY    </button>

        </div>


      </div>
        
</div>
</body>
</html>