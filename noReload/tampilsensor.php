<?php
include "../config/koneksi.php";
//baca data dari tabel tb_sensor
  $sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor ORDER BY id DESC");
  //Ini query yang akan menampilkan data paling terakhir saja
  $data = mysqli_fetch_array($sql);
  $suhu = $data['suhu'];
  $kelembaban = $data['kelembaban'];
  if($suhu == "") $suhu = 0;

  $fahrenheit = ($suhu*9)/5+32;
  $kelvin     = $suhu+273.15;
  $reamur     = ($suhu*4)/5;
?>



<!DOCTYPE html>
<html lang="en">

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed" style="background: #000000">
  <div class="container">

    <div class="row" style="text-align: center;">
      <div class="col-lg-5">
        <div class="info-box bg-danger">
          <!-- <span class="info-box-icon"><i class="far fa-bookmark"></i></span> -->
          <div class="info-box-content">
            <span class="info-box-text"><h4>SUHU</h4></span>
            <span class="info-box-number" style="font-size:70px"><?php echo number_format($suhu,1)?> °C</span>
            <div class="progress">
              <div class="progress-bar" style="width: <?php echo number_format($suhu,1)?>%"></div>
            </div>
            <span class="progress-description">
              <h6>(<?php echo $fahrenheit ?> °F), (<?php echo $kelvin ?> K), (<?php echo $reamur ?> °R)</h6>
            </span>
          </div>
        </div>
      </div>

      <div class="col-md-2" style="color:black;" style="font-size:10px">=</div>

      <div class="col-lg-5"> 
        <div class="info-box bg-info">
          <!-- <span class="info-box-icon"><i class="far fa-bookmark"></i></span> -->
          <div class="info-box-content">
            <span class="info-box-text"><h4>KELEMBABAN</h4></span>
            <span class="info-box-number" style="font-size:70px"><?php echo $kelembaban ?> %</span>
            <div class="progress">
              <div class="progress-bar" style="width: <?php echo $kelembaban ?>%"></div>
            </div>
            <span class="progress-description">
              <h6>⏲</h6>
            </span>
          </div>
        </div> 
      </div>

    </div>
  </div>
</body>

</html>