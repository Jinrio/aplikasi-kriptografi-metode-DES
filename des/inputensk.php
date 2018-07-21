<?php
include('koneksi.php');
$nama=$_POST['nama'];
$enkripsi=base64_decode($nama);
$query=mysql_query("insert into data values('','$enkripsi')")or die(mysql_error());
if ($query) {
echo "<script>alert('Data berhasil di enkripsi');history.go(-1);</script>" ;
} else {
echo "<script>alert('Data Gagal di enkripsi');history.go(-1);</script>" ;
}
?>