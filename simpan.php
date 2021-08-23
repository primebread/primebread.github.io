<?php
include 'function.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$sekolah = $_POST['sekolah'];
$alamat = $_POST['alamat'];
$kota = $_POST['sekolah'];
$kabupaten = $_POST['kabupaten'];
$tanggal = $_POST['tanggal'];


mysqli_query($koneksi, "insert into kontak values('null','$nama','$email','$sekolah','$alamat','$kota','$kabupaten','$tanggal')");

header("location:index.php");

include('koneksi.php');
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$sekolah = $_POST['sekolah'];
$alamat = $_POST['alamat'];
$kota = $_POST['sekolah'];
$kabupaten = $_POST['kabupaten'];
$tanggal = $_POST['tanggal'];
 
$masuk = mysql_query ("insert into warga (nama, tanggallahir) values ('null','$nama','$email','$sekolah','$alamat','$kota','$kabupaten','$tanggal')");
if ($masuk){
echo '<script language="javascript">alert("Berhasil")</script>';
echo '<script language="javascript">window.location = "index.php"</script>';
} else {
echo '<script language="javascript">alert("Data gagal disimpan")</script>';
echo '<script language="javascript">window.location = "index.php"</script>';
}

?>