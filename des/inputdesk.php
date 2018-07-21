<?php
include('koneksi.php');
$nama=$_POST['nama'];
$desripsi=base64_encode($nama);
$query=mysql_query("insert into data values('','$desripsi')")or die(mysql_error());
if ($query) {
echo "<script>alert('Data berhasil di deskripsi');history.go(-1);</script>" ;
} else {
echo "<script>alert('Data Gagal di deskripsi');history.go(-1);</script>" ;
}
?>