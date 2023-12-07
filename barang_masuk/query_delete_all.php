<?php
include '../koneksi.php';
 
$id    = $_GET['id'];

$jml        = mysqli_query($koneksi, "SELECT masuk.`jumlah`, masuk.`kode_barang` FROM data_barang  JOIN masuk ON data_barang.`kode_barang`=masuk.`kode_barang` WHERE masuk.`id` = '$id'");
$jml        = mysqli_fetch_array($jml);
$jml        = $jml['jumlah'];

$kodeBarang        = mysqli_query($koneksi, "SELECT masuk.`jumlah`, masuk.`kode_barang` FROM data_barang  JOIN masuk ON data_barang.`kode_barang`=masuk.`kode_barang` WHERE masuk.`id` = '$id'");
$kodeBarang        = mysqli_fetch_array($kodeBarang);
$kodeBarang        = $kodeBarang['kode_barang'];

$stokBarang = mysqli_query($koneksi, "SELECT data_barang.`stok` FROM data_barang  JOIN masuk ON data_barang.`kode_barang`=masuk.`kode_barang` WHERE masuk.`id` = '$id'");
$stokBarang = mysqli_fetch_array($stokBarang);
$stokBarang = $stokBarang['stok'];
$stokBaru   = $stokBarang - $jml;

$hargaLama = mysqli_query($koneksi, "SELECT data_harga.`harga_beli_old` FROM data_harga JOIN masuk ON data_harga.`kode_barang`=masuk.`kode_barang` WHERE masuk.`id` = '$id'");
$hargaLama = mysqli_fetch_array($hargaLama);
$hargaLama = $hargaLama['harga_beli_old'];

mysqli_query($koneksi, "UPDATE data_harga SET harga_beli = '$hargaLama' WHERE kode_barang = '$kodeBarang'");
mysqli_query($koneksi, "UPDATE data_barang SET stok = '$stokBaru' WHERE kode_barang = '$kodeBarang'");
mysqli_query($koneksi, "DELETE from masuk where id='$id'");

echo "<script>alert('Data Deleted Successfully');window.location='index.php'</script>";
?>