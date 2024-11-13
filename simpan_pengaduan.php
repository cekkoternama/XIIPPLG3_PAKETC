<?php 
require 'config.php';
$tgl=$_POST['tgl_pengaduan'];
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$file=$_FILES['foto']['tmp_name'];
$st=0;



    $query = mysqli_query($conn, "SELECT * FROM pengaduan");("insert into pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status) values('$tgl','$nik','$isi','$st')");


if ($sql)
{
 ?>
 <script type="text/javascript">
   alert ('data berhasil disimpan, Terimakasih sudah menulis laporan');
   window.location="blank.php";
 </script>
 <?php 
}
 ?>