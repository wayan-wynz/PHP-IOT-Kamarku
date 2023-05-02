<?php
include "../config/koneksi.php";

  $lihat_data = mysqli_query($koneksi, "SELECT * FROM tb_sensor ORDER BY id DESC LIMIT 10");
?>

<table id="tabel" class="table table-bordered table-hover table-sm" rules="all">
  <thead style="text-align: center;">
    <tr >
      <th style="text-align:center;">No</th> 
      <th style="text-align:center;">Suhu</th>
      <th style="text-align:center;">Humidity</th>
      <th style="text-align:center;">Tanggal</th>
      <th style="text-align:center;">Jam</th>
    </tr>
  </thead>
  <tbody align="center">
    <?php if (mysqli_num_rows($lihat_data) > 0) { ?>
      <?php
      $no = 0;
      while ($data_sensor = mysqli_fetch_array($lihat_data)) {
        $no++;
        ?>
        <tr>
          <td align="center" width="10px"><?php echo $no; ?></td> 
          <!-- <td align="center"><?php echo $data_sensor['suhu']?> °C</td> -->
          <td align="center"><?php echo number_format($data_sensor['suhu'],1)?> °C</td>
          <td align="center"><?php echo $data_sensor['kelembaban']?> %</td>
          <td align="center"><?php echo date('d-m-Y', strtotime($data_sensor['tanggal']))?></td>
          <td align="center"><?php echo date('H:i:s', strtotime($data_sensor['jam']))?></td>
        </tr>
      <?php } ?>
    <?php } ?>
  </tbody>
</table>