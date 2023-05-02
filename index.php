<?php
include "config/koneksi.php";
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
        // $("#ceksuhu").load("noReload/ceksuhu.php");
        // $("#cekkelembaban").load("noReload/cekkelembaban.php");
        $("#tampilsensor").load("noReload/tampilsensor.php");
        $("#device_iot").load("noReload/cekdeviceIOT.php");
        // $("#suhu").load("noReload/suhu.php");
        // $("#kelembaban").load("noReload/kelembaban.php");
        $("#cektotaldata").load("noReload/cektotaldata.php");
        $("#lastupdate").load("noReload/lastupdate.php");
      }, 1000);
    });
  </script>

</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed" style="background: #000000">
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
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Monitoring <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Selanjutnya
              </a>
              <div class="dropdown-menu dark-mode">
                <a class="dropdown-item" href="rekapitulasi.php">Grafik Rekapitulasi</a>
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
    <div class="content-wrapper" style="background-color:#000000;">
      <!-- Content Header (Page header) -->
      <!-- <br> -->
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container" style="text-align: center; margin-top: 50px;">
          <!-- <h6>.</h6> -->
          <!-- <img src="assets/images/suhu.png" style="width: 70px"> -->
          <h2 style="color: #03fc0b;">Monitoring Temperatur</h2>
          <h5 style="color: #03fc0b;">
            <span id="cektotaldata" style="color: #f73131;">0</span> Data (Realtime)<br>
            <font size="2" style="color: #03fc0b;">👁 Last Update: <span id="lastupdate" style="color: #34baeb;">-</span></font><br>
            <font size="2">📡 Device IOT: <span id="device_iot" style="color: #faf202;">-</span></font>
          </h5>
          <br>
        </div>
        <!-- Tampilan Nilai Sensornya -->
        <span id="tampilsensor"></span>

      </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- ============ FOOTER ============= -->
    <footer class="main-footer dark-mode" style="color: white;">
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
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="../assets/dist/js/demo.js"></script> -->
</body>

</html>