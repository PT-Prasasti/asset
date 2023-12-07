<?php
include '../koneksi.php';
 
$kode_barang    = $_GET['kode_barang'];
$query          ="DELETE from data_barang where kode_barang='$kode_barang'";
mysqli_query($koneksi, $query);
echo "<script>alert('Data Deleted Successfully');window.location='index.php'</script>";
?>