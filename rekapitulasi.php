<?php
  include "config/koneksi.php";
  include "config/DayMonYear.php";

  // $sql1 = "SELECT tb_hari.nm_hari, tb_sensor.tanggal, max(tb_sensor.suhu) AS suhu FROM tb_hari LEFT JOIN tb_sensor ON tb_hari.id_hari = tb_sensor.id_hari WHERE WEEKOFYEAR(tb_sensor.tanggal)=WEEKOFYEAR(NOW()) GROUP BY tb_hari.id_hari";

  // $sql1 = "SELECT tb_sensor.id_hari, CONCAT(tb_hari.nm_hari,'(',DATE_FORMAT(tb_sensor.jam, '%H:%i'),')') AS n_hari, tb_sensor.tanggal, tb_sensor.jam, tb_sensor.suhu FROM tb_sensor LEFT JOIN tb_hari ON tb_sensor.id_hari = tb_hari.id_hari WHERE suhu = (
  //   SELECT MAX(suhu) FROM tb_sensor AS a WHERE a.id_hari = tb_sensor.id_hari AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW())
  // ) GROUP BY id_hari";

  $sql1 = "SELECT tb_sensor.id_hari, CONCAT(tb_hari.nm_hari,'(',DATE_FORMAT(tb_sensor.jam, '%H:%i'),')') AS n_hari, tb_sensor.tanggal, tb_sensor.jam, tb_sensor.suhu FROM tb_sensor LEFT JOIN tb_hari ON tb_sensor.id_hari = tb_hari.id_hari WHERE suhu = (
    SELECT MAX(suhu) FROM tb_sensor AS a WHERE a.id_hari = tb_sensor.id_hari AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW())
  ) AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW()) GROUP BY id_hari";

  // $sql2 = "SELECT tb_hari.nm_hari, tb_sensor.tanggal, min(tb_sensor.suhu) AS suhu FROM tb_hari LEFT JOIN tb_sensor ON tb_hari.id_hari = tb_sensor.id_hari WHERE WEEKOFYEAR(tb_sensor.tanggal)=WEEKOFYEAR(NOW()) GROUP BY tb_hari.id_hari";

  // $sql2 = "SELECT tb_sensor.id_hari, CONCAT(tb_hari.nm_hari,'(',DATE_FORMAT(tb_sensor.jam, '%H:%i'),')') AS n_hari, tb_sensor.tanggal, tb_sensor.jam, tb_sensor.suhu FROM tb_sensor LEFT JOIN tb_hari ON tb_sensor.id_hari = tb_hari.id_hari WHERE suhu = (
  //   SELECT MIN(suhu) FROM tb_sensor AS a WHERE a.id_hari = tb_sensor.id_hari AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW())
  // ) GROUP BY id_hari";

  $sql2 = "SELECT tb_sensor.id_hari, CONCAT(tb_hari.nm_hari,'(',DATE_FORMAT(tb_sensor.jam, '%H:%i'),')') AS n_hari, tb_sensor.tanggal, tb_sensor.jam, tb_sensor.suhu FROM tb_sensor LEFT JOIN tb_hari ON tb_sensor.id_hari = tb_hari.id_hari WHERE suhu = (
    SELECT MIN(suhu) FROM tb_sensor AS a WHERE a.id_hari = tb_sensor.id_hari AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW())
  ) AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW()) GROUP BY id_hari";

  // $sql3 = "SELECT tb_hari.nm_hari, tb_sensor.tanggal, max(tb_sensor.suhu) AS suhu FROM tb_hari LEFT JOIN tb_sensor ON tb_hari.id_hari = tb_sensor.id_hari WHERE WEEKOFYEAR(tb_sensor.tanggal)=WEEKOFYEAR(NOW())-1 GROUP BY tb_hari.id_hari";

  // $sql3 = "SELECT tb_sensor.id_hari, CONCAT(tb_hari.nm_hari,'(',DATE_FORMAT(tb_sensor.jam, '%H:%i'),')') AS n_hari, tb_sensor.tanggal, tb_sensor.jam, tb_sensor.suhu FROM tb_sensor LEFT JOIN tb_hari ON tb_sensor.id_hari = tb_hari.id_hari WHERE suhu = (
  //   SELECT MAX(suhu) FROM tb_sensor AS a WHERE a.id_hari = tb_sensor.id_hari AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW())-1
  // ) GROUP BY id_hari";

  $sql3 = "SELECT tb_sensor.id_hari, CONCAT(tb_hari.nm_hari,'(',DATE_FORMAT(tb_sensor.jam, '%H:%i'),')') AS n_hari, tb_sensor.tanggal, tb_sensor.jam, tb_sensor.suhu FROM tb_sensor LEFT JOIN tb_hari ON tb_sensor.id_hari = tb_hari.id_hari WHERE suhu = (
    SELECT MAX(suhu) FROM tb_sensor AS a WHERE a.id_hari = tb_sensor.id_hari AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW())-1
  ) AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW())-1 GROUP BY id_hari";

  // $sql4 = "SELECT tb_hari.nm_hari, tb_sensor.tanggal, min(tb_sensor.suhu) AS suhu FROM tb_hari LEFT JOIN tb_sensor ON tb_hari.id_hari = tb_sensor.id_hari WHERE WEEKOFYEAR(tb_sensor.tanggal)=WEEKOFYEAR(NOW())-1 GROUP BY tb_hari.id_hari";

  // $sql4 = "SELECT tb_sensor.id_hari, CONCAT(tb_hari.nm_hari,'(',DATE_FORMAT(tb_sensor.jam, '%H:%i'),')') AS n_hari, tb_sensor.tanggal, tb_sensor.jam, tb_sensor.suhu FROM tb_sensor LEFT JOIN tb_hari ON tb_sensor.id_hari = tb_hari.id_hari WHERE suhu = (
  //   SELECT MIN(suhu) FROM tb_sensor AS a WHERE a.id_hari = tb_sensor.id_hari AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW())-1
  // ) GROUP BY id_hari";

  $sql4 = "SELECT tb_sensor.id_hari, CONCAT(tb_hari.nm_hari,'(',DATE_FORMAT(tb_sensor.jam, '%H:%i'),')') AS n_hari, tb_sensor.tanggal, tb_sensor.jam, tb_sensor.suhu FROM tb_sensor LEFT JOIN tb_hari ON tb_sensor.id_hari = tb_hari.id_hari WHERE suhu = (
    SELECT MIN(suhu) FROM tb_sensor AS a WHERE a.id_hari = tb_sensor.id_hari AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW())-1
  ) AND WEEKOFYEAR(tanggal)=WEEKOFYEAR(NOW())-1 GROUP BY id_hari";

  // $sql5 = "SELECT tb_hari.nm_hari, tb_sensor.tanggal, max(tb_sensor.suhu) AS suhu FROM tb_hari LEFT JOIN tb_sensor ON tb_hari.id_hari = tb_sensor.id_hari WHERE YEAR(tanggal) = YEAR(NOW()) AND MONTH(tanggal)=MONTH(NOW()) GROUP BY YEARWEEK(tb_sensor.tanggal)";
  
  // $sql55 = "SET @no=0";
  // $sql5 = "SELECT CONCAT('Minggu Ke-',@no:=@no+1) AS minggu, tanggal, MAX(suhu) AS suhu FROM tb_sensor WHERE YEAR(tanggal) = YEAR(NOW()) AND MONTH(tanggal)=MONTH(NOW()) GROUP BY YEARWEEK(tanggal,1)";
  $sql5 = "SELECT tanggal, MAX(suhu) AS suhu FROM tb_sensor WHERE YEAR(tanggal) = YEAR(NOW()) AND MONTH(tanggal)=MONTH(NOW()) GROUP BY YEARWEEK(tanggal,1)";

  // $sql6 = "SELECT CONCAT('Minggu Ke-',@no:=@no+1) AS minggu, tanggal, MIN(suhu) AS suhu FROM tb_sensor WHERE YEAR(tanggal) = YEAR(NOW()) AND MONTH(tanggal)=MONTH(NOW()) GROUP BY YEARWEEK(tanggal,1)";

  $sql6 = "SELECT tanggal, MIN(suhu) AS suhu FROM tb_sensor WHERE YEAR(tanggal) = YEAR(NOW()) AND MONTH(tanggal)=MONTH(NOW()) GROUP BY YEARWEEK(tanggal,1)";

  // $sql6 = "SELECT tb_hari.nm_hari, tb_sensor.tanggal, min(tb_sensor.suhu) AS suhu FROM tb_hari LEFT JOIN tb_sensor ON tb_hari.id_hari = tb_sensor.id_hari WHERE YEAR(tanggal) = YEAR(NOW()) AND MONTH(tanggal)=MONTH(NOW()) GROUP BY YEARWEEK(tb_sensor.tanggal)";

  //   $sql7 = "SELECT tb_bulan.nm_bulan, tb_sensor.tanggal, max(tb_sensor.suhu) AS suhu FROM tb_bulan LEFT JOIN tb_sensor ON tb_bulan.id_bulan = tb_sensor.id_bulan WHERE YEAR(tanggal)=YEAR(NOW()) GROUP BY MONTH(tb_sensor.tanggal)";
  $sql7 = "SELECT tb_bulan.id_bulan, tb_bulan.nm_bulan, CONCAT(DATE_FORMAT(tb_sensor.tanggal, '%d'),' ',tb_bulan.nm_bulan) AS n_bulan, tb_sensor.tanggal, tb_sensor.suhu FROM tb_bulan LEFT JOIN tb_sensor ON tb_bulan.id_bulan = tb_sensor.id_bulan WHERE suhu = (
    SELECT MAX(suhu) FROM tb_sensor AS a WHERE a.id_bulan = tb_sensor.id_bulan AND YEAR(tanggal)=YEAR(NOW())
  ) AND YEAR(tanggal)=YEAR(NOW()) GROUP BY MONTH(tb_sensor.tanggal)";
  
//   $sql8 = "SELECT tb_bulan.nm_bulan, tb_sensor.tanggal, min(tb_sensor.suhu) AS suhu FROM tb_bulan LEFT JOIN tb_sensor ON tb_bulan.id_bulan = tb_sensor.id_bulan WHERE YEAR(tanggal)=YEAR(NOW()) GROUP BY MONTH(tb_sensor.tanggal)";
    $sql8 = "SELECT tb_bulan.id_bulan, tb_bulan.nm_bulan, CONCAT(DATE_FORMAT(tb_sensor.tanggal, '%d'),' ',tb_bulan.nm_bulan) AS n_bulan, tb_sensor.tanggal, tb_sensor.suhu FROM tb_bulan LEFT JOIN tb_sensor ON tb_bulan.id_bulan = tb_sensor.id_bulan WHERE suhu = (
    SELECT MIN(suhu) FROM tb_sensor AS a WHERE a.id_bulan = tb_sensor.id_bulan AND YEAR(tanggal)=YEAR(NOW())
  ) AND YEAR(tanggal)=YEAR(NOW()) GROUP BY MONTH(tb_sensor.tanggal)";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link href="assets/images/suhu.png" rel="icon">
  <link href="assets/images/suhu.png" rel="apple-touch-icon">
  <!-- <link href="../assets/img/icon.png" rel="icon"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Monitoring Sensor</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome Icons -->
  <!-- <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="assets/dist/css/adminlte.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

  <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function() {
        $("#lastupdate1").load("noReload/lastupdate.php");
        $("#device_iot1").load("noReload/cekdeviceIOT.php");
        $("#lastupdate2").load("noReload/lastupdate.php");
        $("#device_iot2").load("noReload/cekdeviceIOT.php");
        $("#lastupdate3").load("noReload/lastupdate.php");
        $("#device_iot3").load("noReload/cekdeviceIOT.php");
      }, 1000);
    });
  </script>

</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed dark-mode" style="background: #000000">
  <div class="wrapper">

    <!-- ============ NAVBAR ============= -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="assets/images/suhu.png" alt="Logo" class="brand-image" style="opacity: .8">
        <?php echo $nama_apps?> <?php echo $nama_versi?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Monitoring <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Selanjutnya
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item active" href="rekapitulasi.php">Grafik Rekapitulasi</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="tabel.php">Lihat Tabel Data</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- ============ END NAVBAR ============= -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content">
      <!-- Content Header (Page header) -->
      <!-- <br> -->
      <!-- /.content-header -->

      <!-- Main content -->

      <section class="content">
        <div class="container" style="text-align: center; margin-top: 60px;">
          <!-- <img src="images/suhu.png" style="width: 50px"> -->
          <!-- <h2>Tabel Nilai Sensor</h2> -->
          <!-- <h3>Grafik Rekap Monitoring</h3> -->
          <!-- <h5>Belum Selesai Broooo <br> 😁😁</h5> -->
          <!-- <h5>FW by Laravel 9.52.4</h5> -->
        </div>
      </section>




      <div class="content">
        <div class="container" style="text-align: center; margin-top: 10px;">

          <div class="">
            <!-- <h6>Sajian Data Bulan <?php echo $bulan; echo date(' Y');?></h6> -->
            <div class="col-12 col-sm-12">
              <div class="card card-success card-tabs">
                <div class="card-header p-0 pt-0">
                  <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                    <li class="pt-2 px-3"><h3 class="card-title">❤ </h3></li>
                    <li class="nav-item">
                      <a class="nav-link active" id="tab-satu-tab" data-toggle="pill" href="#tab-satu" role="tab" aria-controls="tab-satu" aria-selected="true">Perhari</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="tab-dua-tab" data-toggle="pill" href="#tab-dua" role="tab" aria-controls="tab-dua" aria-selected="false">Perminggu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="tab-tiga-tab" data-toggle="pill" href="#tab-tiga" role="tab" aria-controls="tab-tiga" aria-selected="false">Perbulan</a>
                    </li>
                  </ul>
                </div>
                <div class="">
                  <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="tab-satu" role="tabpanel" aria-labelledby="tab-satu-tab">
                      <div class="card p-1 card-success card-outline card-outline-tabs">
                        <h4>Grafik Monitoring</h4>
                        <font size="2" style="color: #ffffff;">👁 Realtime Update: <b><span id="lastupdate1" style="color: #1aff00;">-</span></b><br>
                          📡 Device IOT: <span id="device_iot1" style="color: #faf202;">-</span>
                        </font>
                        <div class="card-header p-1 border-bottom-0">
                          <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#tab-1" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Minggu Ini</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#tab-2" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Minggu Lalu</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body p-1">
                          <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                             
                              <div class="row">
                                <div class="col-7 col-sm-10">
                                  <div class="tab-content" id="vert-tabs-right-tabContent">
                                    <div class="tab-pane show active" id="tab_suhutinggi_minggu_ini" role="tabpanel" aria-labelledby="vert-tabs-right-home-tab">
                                      <div class="" align="center">
                                        <div class="col-md-6 col-sm-12">
                                          <div class="chart">
                                            <canvas id="suhu_tinggi_perhari" style="min-height: 320px; height: 200px; max-height: 340px; max-width: 100%;"></canvas>
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="tab-pane" id="tab_suhurendah_minggu_ini" role="tabpanel" aria-labelledby="vert-tabs-right-profile-tab">
                                      <div class="" align="center">
                                        <div class="col-md-6 col-sm-12">
                                          <div class="chart">
                                            <canvas id="suhu_rendah_perhari" style="min-height: 320px; height: 250px; max-height: 340px; max-width: 100%;"></canvas>
                                          </div>
                                        </div>
                                      </div> 
                                    </div>
                                  </div>
                                </div>
                                <div class="col-5 col-sm-2">
                                  <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                                    <h6>Sajian Data Suhu <br>Bulan <?php echo $bulanNama; echo date(' Y');?></h6>
                                    <a class="nav-link active" id="vert-tabs-right-home-tab" data-toggle="pill" href="#tab_suhutinggi_minggu_ini" role="tab" aria-controls="vert-tabs-right-home" aria-selected="true">🔼 Tertinggi</a>
                                    <a class="nav-link" id="vert-tabs-right-profile-tab" data-toggle="pill" href="#tab_suhurendah_minggu_ini" role="tab" aria-controls="vert-tabs-right-profile" aria-selected="false">🔽 Terendah</a>
                                  </div>
                                </div>
                              </div>

                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                              
                              <div class="row">
                                <div class="col-7 col-sm-10">
                                  <div class="tab-content" id="vert-tabs-right-tabContent">
                                    <div class="tab-pane show active" id="tab_suhutinggi_minggu_kemaren" role="tabpanel" aria-labelledby="vert-tabs-right-home-tab">
                                      <div class="" align="center">
                                        <div class="col-md-6 col-sm-12">
                                          <div class="chart">
                                            <canvas id="suhu_tinggi_perhari_kemaren" style="min-height: 320px; height: 250px; max-height: 340px; max-width: 100%;"></canvas>
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="tab-pane" id="tab_suhurendah_minggu_kemaren" role="tabpanel" aria-labelledby="vert-tabs-right-profile-tab">
                                      <div class="" align="center">
                                        <div class="col-md-6 col-sm-12">
                                          <div class="chart">
                                            <canvas id="suhu_rendah_perhari_kemaren" style="min-height: 320px; height: 250px; max-height: 340px; max-width: 100%;"></canvas>
                                          </div>
                                        </div>
                                      </div> 
                                    </div>
                                  </div>
                                </div>
                                <div class="col-5 col-sm-2">
                                  <h6>Sajian Data Suhu <br>Bulan <?php echo $bulanNama; echo date(' Y');?></h6>
                                  <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="vert-tabs-right-home-tab" data-toggle="pill" href="#tab_suhutinggi_minggu_kemaren" role="tab" aria-controls="vert-tabs-right-home" aria-selected="true">🔼 Tertinggi</a>
                                    <a class="nav-link" id="vert-tabs-right-profile-tab" data-toggle="pill" href="#tab_suhurendah_minggu_kemaren" role="tab" aria-controls="vert-tabs-right-profile" aria-selected="false">🔽 Terendah</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                           
                          </div>
                        </div>
                       <!-- /.card -->
                      </div>

                    </div>
                    

                    <div class="tab-pane fade" id="tab-dua" role="tabpanel" aria-labelledby="tab-dua-tab">
                      
                      <div class="card card-success card-outline card-outline-tabs">
                        <div class="card-body p-1">
                          <h4>Grafik Monitoring</h4>
                          <font size="2" style="color: #ffffff;">👁 Realtime Update: <b><span id="lastupdate2" style="color: #1aff00;">-</span></b><br>
                            📡 Device IOT: <span id="device_iot2" style="color: #faf202;">-</span>
                          </font>
                          <div class="row">
                            <div class="col-md-10 col-sm-10">
                              <div class="tab-content" id="vert-tabs-right-tabContent">
                                <div class="tab-pane fade show active" id="tab_suhutinggi_perminggu" role="tabpanel" aria-labelledby="vert-tabs-right-home-tab">
                                  <div class="" align="center">
                                    <div class="col-md-8 col-sm-12">
                                      <div class="chart">
                                        <canvas id="suhu_tinggi_perminggu" style="min-height: 350px; height: 250px; max-height: 350px; max-width: 100%;"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="tab_suhurendah_perminggu" role="tabpanel" aria-labelledby="vert-tabs-right-profile-tab">
                                  <div class="" align="center">
                                    <div class="col-md-8 col-sm-12">
                                      <div class="chart">
                                        <canvas id="suhu_rendah_perminggu" style="min-height: 350px; height: 250px; max-height: 350px; max-width: 100%;"></canvas>
                                      </div>
                                    </div>
                                  </div> 
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                              <h6>Sajian Data Suhu <br>Bulan <?php echo $bulanNama; echo date(' Y');?></h6>
                              <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vert-tabs-right-home-tab" data-toggle="pill" href="#tab_suhutinggi_perminggu" role="tab" aria-controls="vert-tabs-right-home" aria-selected="true">🔼 Tertinggi</a>
                                <a class="nav-link" id="vert-tabs-right-profile-tab" data-toggle="pill" href="#tab_suhurendah_perminggu" role="tab" aria-controls="vert-tabs-right-profile" aria-selected="false">🔽 Terendah</a>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div>
                    </div>

                    <div class="tab-pane fade" id="tab-tiga" role="tabpanel" aria-labelledby="tab-tiga-tab">
                      
                      <div class="card card-success card-outline card-outline-tabs">
                        <div class="card-body p-1">
                          <h4>Grafik Monitoring</h4>
                          <font size="2" style="color: #ffffff;">👁 Realtime Update: <b><span id="lastupdate3" style="color: #1aff00;">-</span></b><br>
                            📡 Device IOT: <span id="device_iot3" style="color: #faf202;">-</span>
                          </font>
                          <div class="row">
                            <div class="col-md-10 col-sm-9">
                              <div class="tab-content" id="vert-tabs-right-tabContent">
                                <div class="tab-pane fade show active" id="tab_suhutinggi_perbulan" role="tabpanel" aria-labelledby="vert-tabs-right-home-tab">
                                  <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                      <div class="chart">
                                        <canvas id="suhu_tinggi_perbulan" style="min-height: 350px; height: 250px; max-height: 350px; max-width: 100%;"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="tab_suhurendah_perbulan" role="tabpanel" aria-labelledby="vert-tabs-right-profile-tab">
                                  <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                      <div class="chart">
                                        <canvas id="suhu_rendah_perbulan" style="min-height: 350px; height: 250px; max-height: 350px; max-width: 100%;"></canvas>
                                      </div>
                                    </div>
                                  </div> 
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                              <h6>Sajian Data Suhu <br>Sampai <?php echo $bulanNama; echo date(' Y');?></h6>
                              <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vert-tabs-right-home-tab" data-toggle="pill" href="#tab_suhutinggi_perbulan" role="tab" aria-controls="vert-tabs-right-home" aria-selected="true">🔼 Tertinggi</a>
                                <a class="nav-link" id="vert-tabs-right-profile-tab" data-toggle="pill" href="#tab_suhurendah_perbulan" role="tab" aria-controls="vert-tabs-right-profile" aria-selected="false">🔽 Terendah</a>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div>

                    </div>
                  </div>
                </div>
               <!-- /.card -->
              </div>
            </div>
          </div>




          <div>
            <!-- <canvas id="myChart1"></canvas> -->
          </div>

        </div>
      </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- ============ FOOTER ============= -->
    <footer class="main-footer" style="background-color: #24272b; color: white;">
      <!-- To the right -->
      
      <!-- Default to the left -->
      <strong>&copy; 2023 I Wayan Sujane.</strong>
    </footer>
    <!-- ============ END FOOTER ============= -->
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <!-- <script src="../assets/plugins/jquery/jquery.min.js"></script> -->
  <!-- <script src="jquery/jquery.min.js"></script> -->
  <!-- Bootstrap 4 -->
  <!-- <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!-- AdminLTE App -->
  <!-- <script src="../assets/dist/js/adminlte.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0/dist/chartjs-plugin-datalabels.min.js"></script> 
  <!-- Untuk menampilkan nilai di atas grafik batangnya -->

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->

  <!-- AdminLTE for demo purposes -->
  <!-- <script src="../assets/dist/js/demo.js"></script> -->

  <!-- ============================== PERHARI ====================================== -->

  <script>
    <?php

    $hariT     = "";
    $suhuHariT = "";

    $hasil1 = mysqli_query($koneksi, $sql1);

    while ($rekap1 = mysqli_fetch_array($hasil1)) {
      $hariI = $rekap1['n_hari'];
      $hariT .= "'$hariI'" . ", ";

      $suhuU = $rekap1['suhu'];
      $suhuHariT .= "$suhuU" . ", ";
    }
    ?>

    Chart.register(ChartDataLabels); //Scrip Untuk Aktifkan Teks Diatas chart Ke semua Grafik
    const ctx_suhu_tinggi_perhari = document.getElementById('suhu_tinggi_perhari');

    new Chart(ctx_suhu_tinggi_perhari, {
      type: 'bar',
      data: {
        labels: [<?php echo $hariT; ?>],
        // labels: ['Selasa', 'Rabu', 'Kamis'],
        datasets: [{
          label: 'Suhu Tertinggi Minggu Ini',
          backgroundColor: '#ff0000',
          borderColor: ['#ff0000'],
          data: [<?php echo $suhuHariT; ?>],
          borderWidth: 1
        }]
      },
      options: {
        maintainAspectRatio : false,
        responsive : true,
        scales: {
          y: {
            max: 50,
            min: 0,
            ticks: {
              color: '#2cfc03',
              stepSize: 5,
              // menambah label celcius
              callback: function(value, index, ticks) {
                        return value + ' °C';
              }
            }
          },
          x: {
            ticks: {
              color: '#ffff00'
            }
          }
        },
        plugins: {
            legend: {
              labels: {
                color: '#ffff00'
              }
            },
            datalabels: { // This code is used to display data values
                anchor: 'end',
                align: 'bottom',
                rotation: '-90',
                color: '#ffffff',
                // formatter: Math.round,
                formatter: function(value, context){
                  return value + ' °C';
                },
                // formatter: function(value, context) {
                // return context.dataIndex + ': ' + Math.round(value*100) + '%';
                // },
                font: {
                    weight: 'bold',
                    size: 14
                }
            }
        }
      }
    });
  </script>

  <script>
    <?php

    $hariR     = "";
    $suhuHariR = "";

    $hasil2 = mysqli_query($koneksi, $sql2);

    while ($rekap2 = mysqli_fetch_array($hasil2)) {
      $hariII = $rekap2['n_hari'];
      $hariR .= "'$hariII'" . ", ";

      $suhuUU = $rekap2['suhu'];
      $suhuHariR .= "$suhuUU" . ", ";
    }
    ?>

    // Chart.register(ChartDataLabels);
    const ctx_suhu_rendah_perhari = document.getElementById('suhu_rendah_perhari');

    new Chart(ctx_suhu_rendah_perhari, {
      type: 'bar',
      data: {
        labels: [<?php echo $hariR; ?>],
        datasets: [{
          label: 'Suhu Terendah Minggu Ini',
          backgroundColor: '#4f90ff',
          borderColor: ['#4f90ff'],
          data: [<?php echo $suhuHariR; ?>],
          borderWidth: 1
        }]
      },
      options: {
        maintainAspectRatio : false,
        responsive : true,
        scales: {
          y: {
            max: 50,
            min: 0,
            ticks: {
              color: '#2cfc03',
              stepSize: 5,
              // menambah label celcius
              callback: function(value, index, ticks) {
                        return value + ' °C';
              }
            }
          },
          x: {
            ticks: {
              color: '#ffff00'
            }
          }
        },
        plugins: {
            legend: {
              labels: {
                color: '#ffff00'
              }
            },
            datalabels: { // This code is used to display data values
                anchor: 'end',
                align: 'bottom',
                rotation: '-90',
                color: '#ffffff',
                // formatter: Math.round,
                formatter: function(value, context){
                  return value + ' °C';
                },
                // formatter: function(value, context) {
                // return context.dataIndex + ': ' + Math.round(value*100) + '%';
                // },
                font: {
                    weight: 'bold',
                    size: 14
                }
            }
        }
      }
    });
  </script>

  <script>
    <?php

    $hariTK     = "";
    $suhuHariTK = "";

    $hasil3 = mysqli_query($koneksi, $sql3);

    while ($rekap3 = mysqli_fetch_array($hasil3)) {
      $hariK = $rekap3['n_hari'];
      $hariTK .= "'$hariK'" . ", ";

      $suhuK = $rekap3['suhu'];
      $suhuHariTK .= "$suhuK" . ", ";
    }
    ?>

    // Chart.register(ChartDataLabels);
    const ctx_suhu_tinggi_perhari_kemaren = document.getElementById('suhu_tinggi_perhari_kemaren');

    new Chart(ctx_suhu_tinggi_perhari_kemaren, {
      type: 'bar',
      data: {
        labels: [<?php echo $hariTK; ?>],
        datasets: [{
          label: 'Suhu Tinggi Minggu Lalu',
          backgroundColor: '#ff0000',
          borderColor: ['#ff0000'],
          data: [<?php echo $suhuHariTK; ?>],
          borderWidth: 1
        }]
      },
      options: {
        maintainAspectRatio : false,
        responsive : true,
        scales: {
          y: {
            max: 50,
            min: 0,
            ticks: {
              color: '#2cfc03',
              stepSize: 5,
              // menambah label celcius
              callback: function(value, index, ticks) {
                        return value + ' °C';
              }
            }
          },
          x: {
            ticks: {
              color: '#ffff00'
            }
          }
        },
        plugins: {
            legend: {
              labels: {
                color: '#ffff00'
              }
            },
            datalabels: { // This code is used to display data values
                anchor: 'end',
                align: 'bottom',
                rotation: '-90',
                color: '#ffffff',
                // formatter: Math.round,
                formatter: function(value, context){
                  return value + ' °C';
                },
                // formatter: function(value, context) {
                // return context.dataIndex + ': ' + Math.round(value*100) + '%';
                // },
                font: {
                    weight: 'bold',
                    size: 14
                }
            }
        }
      }
    });
  </script>

  <script>
    <?php

    $hariRK     = "";
    $suhuHariRK = "";

    $hasil4 = mysqli_query($koneksi, $sql4);

    while ($rekap4 = mysqli_fetch_array($hasil4)) {
      $harirK = $rekap4['n_hari'];
      $hariRK .= "'$harirK'" . ", ";

      $suhurK = $rekap4['suhu'];
      $suhuHariRK .= "$suhurK" . ", ";
    }
    ?>

    // Chart.register(ChartDataLabels);
    const ctx_suhu_rendah_perhari_kemaren = document.getElementById('suhu_rendah_perhari_kemaren');

    new Chart(ctx_suhu_rendah_perhari_kemaren, {
      type: 'bar',
      data: {
        labels: [<?php echo $hariRK; ?>],
        datasets: [{
          label: 'Suhu Terendah Minggu Lalu',
          backgroundColor: '#4f90ff',
          borderColor: ['#4f90ff'],
          data: [<?php echo $suhuHariRK; ?>],
          borderWidth: 1
        }]
      },
      options: {
        maintainAspectRatio : false,
        responsive : true,
        scales: {
          y: {
            max: 50,
            min: 0,
            ticks: {
              color: '#2cfc03',
              stepSize: 5,
              // menambah label celcius
              callback: function(value, index, ticks) {
                        return value + ' °C';
              }
            }
          },
          x: {
            ticks: {
              color: '#ffff00'
            }
          }
        },
        plugins: {
            legend: {
              labels: {
                color: '#ffff00'
              }
            },
            datalabels: { // This code is used to display data values
                anchor: 'end',
                align: 'bottom',
                rotation: '-90',
                color: '#ffffff',
                // formatter: Math.round,
                formatter: function(value, context){
                  return value + ' °C';
                },
                // formatter: function(value, context) {
                // return context.dataIndex + ': ' + Math.round(value*100) + '%';
                // },
                font: {
                    weight: 'bold',
                    size: 14
                }
            }
        }
      }
    });
  </script>

<!-- ====================== PERMINGGU ===================================== -->

  <script>
    <?php

    $perMingguT = "";
    $suhuMingguT= "";
    $urutMingguT = 1;

    $hasil5 = mysqli_query($koneksi, $sql5);
    // $hasil5 = mysqli_multi_query($koneksi, $sql5);

    while ($rekap5 = mysqli_fetch_array($hasil5)) {
      // $mingguMT = date('d-m-Y', strtotime($rekap5['tanggal']));
      // $mingguMT = $rekap5['minggu'];
      $urutT     = $urutMingguT++;
      $mingguMT = 'Mgg Ke- '.$urutT;
      $perMingguT .= "'$mingguMT'" . ", ";

      $suhutM = $rekap5['suhu'];
      $suhuMingguT .= "$suhutM" . ", ";
    }
    ?>

    const ctx_suhu_tinggi_perminggu = document.getElementById('suhu_tinggi_perminggu');

    new Chart(ctx_suhu_tinggi_perminggu, {
      type: 'bar',
      data: {
        // labels: ['Ke1','Ke2','Ke3','Ke4','Ke5','Ke6'],
        labels: [<?php echo $perMingguT; ?>],
        datasets: [{
          label: 'Suhu Tertinggi',
          backgroundColor: '#ff0000',
          borderColor: ['#ff0000'],
          data: [<?php echo $suhuMingguT; ?>],
          borderWidth: 1
        }]
      },
      options: {
        maintainAspectRatio : false,
        responsive : true,
        scales: {
          y: {
            max: 50,
            min: 0,
            ticks: {
              color: '#2cfc03',
              stepSize: 5,
              // menambah label celcius
              callback: function(value, index, ticks) {
                        return value + ' °C';
              }
            }
          },
          x: {
            ticks: {
              color: '#ffff00'
            }
          }
        },
        plugins: {
            legend: {
              labels: {
                color: '#ffff00'
              }
            },
            datalabels: { // This code is used to display data values
                anchor: 'end',
                align: 'top',
                color: '#ffffff',
                // formatter: Math.round,
                formatter: function(value, context){
                  return value + ' °C';
                },
                // formatter: function(value, context) {
                // return context.dataIndex + ': ' + Math.round(value*100) + '%';
                // },
                font: {
                    weight: 'bold',
                    size: 9
                }
            }
        }
      }
    });
  </script>

  <script>
    <?php

    $perMingguR  = "";
    $suhuMingguR= "";
    $urutMingguR = 1;

    $hasil6 = mysqli_query($koneksi, $sql6);

    while ($rekap6 = mysqli_fetch_array($hasil6)) {
      // $mingguMR = date('d-m-Y', strtotime($rekap6['tanggal']));
      // $mingguMR = $rekap6['minggu'];
      $urutR     = $urutMingguR++;
      $mingguMR = 'Mgg Ke- '.$urutR;
      $perMingguR .= "'$mingguMR'" . ", ";

      $suhurM = $rekap6['suhu'];
      $suhuMingguR .= "$suhurM" . ", ";
    }
    ?>

    const ctx_suhu_rendah_perminggu = document.getElementById('suhu_rendah_perminggu');

    new Chart(ctx_suhu_rendah_perminggu, {
      type: 'bar',
      data: {
        labels: [<?php echo $perMingguR; ?>],
        datasets: [{
          label: 'Suhu Terendah',
          backgroundColor: '#4f90ff',
          borderColor: ['#4f90ff'],
          data: [<?php echo $suhuMingguR; ?>],
          borderWidth: 1
        }]
      },
      options: {
        maintainAspectRatio : false,
        responsive : true,
        scales: {
          y: {
            max: 50,
            min: 0,
            ticks: {
              color: '#2cfc03',
              stepSize: 5,
              // menambah label celcius
              callback: function(value, index, ticks) {
                        return value + ' °C';
              }
            }
          },
          x: {
            ticks: {
              color: '#ffff00'
            }
          }
        },
        plugins: {
            legend: {
              labels: {
                color: '#ffff00'
              }
            },
            datalabels: { // This code is used to display data values
                anchor: 'end',
                align: 'top',
                color: '#ffffff',
                // formatter: Math.round,
                formatter: function(value, context){
                  return value + ' °C';
                },
                // formatter: function(value, context) {
                // return context.dataIndex + ': ' + Math.round(value*100) + '%';
                // },
                font: {
                    weight: 'bold',
                    size: 9
                }
            }
        }
      }
    });
  </script>

  <!-- ======================================= PERBULAN ======================================= -->

  <script>
    <?php

    $perBulanT  = "";
    $suhuPerbulanT = "";

    $hasil7 = mysqli_query($koneksi, $sql7);

    while ($rekap7 = mysqli_fetch_array($hasil7)) {
      $bulanT = $rekap7['n_bulan'];
      $perBulanT .= "'$bulanT'" . ", ";

      $suhuPerT = $rekap7['suhu'];
      $suhuPerbulanT .= "$suhuPerT" . ", ";
    }
    ?>

    const ctx_suhu_tinggi_perbulan = document.getElementById('suhu_tinggi_perbulan');

    new Chart(ctx_suhu_tinggi_perbulan, {
      type: 'bar',
      data: {
        // labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        labels: [<?php echo $perBulanT; ?>],
        datasets: [{
          label: 'Suhu Tertinggi',
          backgroundColor: '#ff0000',
          borderColor: ['#ff0000'],
          // data: [35.3, 35.5, 32.8, 36, 31.8, 35.3, 35.5, 32.8, 31.8, 35.3, 35.5, 32.8],
          data: [<?php echo $suhuPerbulanT; ?>],
          borderWidth: 1
        }]
      },
      options: {
        maintainAspectRatio : false,
        responsive : true,
        scales: {
          y: {
            max: 50,
            min: 0,
            ticks: {
              color: '#2cfc03',
              stepSize: 5,
              // menambah label celcius
              callback: function(value, index, ticks) {
                        return value + ' °C';
              }
            }
          },
          x: {
            ticks: {
              color: '#ffff00'
            }
          }
        },
        plugins: {
            legend: {
              labels: {
                color: '#ffff00'
              }
            },
            datalabels: { // This code is used to display data values
                anchor: 'end',
                align: 'top',
                rotation: '-90',
                color: '#ffffff',
                // formatter: Math.round,
                formatter: function(value, context){
                  return value + ' °C';
                },
                // formatter: function(value, context) {
                // return context.dataIndex + ': ' + Math.round(value*100) + '%';
                // },
                font: {
                    weight: 'bold',
                    size: 14
                }
            }
        }
      }
    });
  </script>

  <script>
    <?php

    $perBulanR  = "";
    $suhuPerbulanR = "";

    $hasil8 = mysqli_query($koneksi, $sql8);

    while ($rekap8 = mysqli_fetch_array($hasil8)) {
      $bulanR = $rekap8['n_bulan'];
      $perBulanR .= "'$bulanR'" . ", ";

      $suhuPerR = $rekap8['suhu'];
      $suhuPerbulanR .= "$suhuPerR" . ", ";
    }
    ?>

    const ctx_suhu_rendah_perbulan = document.getElementById('suhu_rendah_perbulan');

    new Chart(ctx_suhu_rendah_perbulan, {
      type: 'bar',
      data: {
        // labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        labels: [<?php echo $perBulanR; ?>],
        datasets: [{
          label: 'Suhu Terendah',
          backgroundColor: '#4f90ff',
          borderColor: ['#4f90ff'],
          // data: [27.4, 26.5, 28.3, 28.7, 27.8, 27.4, 26.5, 28.3, 28.7, 27.8, 27.4, 26.5],
          data: [<?php echo $suhuPerbulanR; ?>],
          borderWidth: 1
        }]
      },
      options: {
        maintainAspectRatio : false,
        responsive : true,
        scales: {
          y: {
            max: 50,
            min: 0,
            ticks: {
              color: '#2cfc03',
              stepSize: 5,
              // menambah label celcius
              callback: function(value, index, ticks) {
                        return value + ' °C';
              }
            }
          },
          x: {
            ticks: {
              color: '#ffff00'
            }
          }
        },
        plugins: {
            legend: {
              labels: {
                color: '#ffff00'
              }
            },
            datalabels: { // This code is used to display data values
                anchor: 'end',
                align: 'bottom',
                rotation: '-90',
                color: '#ffffff',
                // formatter: Math.round,
                formatter: function(value, context){
                  return value + ' °C';
                },
                // formatter: function(value, context) {
                // return context.dataIndex + ': ' + Math.round(value*100) + '%';
                // },
                font: {
                    weight: 'bold',
                    size: 14
                }
            }
        }
      }
    });
  </script>
</body>

</html>