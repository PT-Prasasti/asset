<?php
include '../koneksi.php';
 
$id    = $_GET['id'];

$jml        = mysqli_query($koneksi, "SELECT masuk_sementara.`jumlah`, masuk_sementara.`kode_barang` FROM data_barang  JOIN masuk_sementara ON data_barang.`kode_barang`=masuk_sementara.`kode_barang` WHERE masuk_sementara.`id` = '$id'");
$jml        = mysqli_fetch_array($jml);
$jml        = $jml['jumlah'];

$kodeBarang        = mysqli_query($koneksi, "SELECT masuk_sementara.`jumlah`, masuk_sementara.`kode_barang` FROM data_barang  JOIN masuk_sementara ON data_barang.`kode_barang`=masuk_sementara.`kode_barang` WHERE masuk_sementara.`id` = '$id'");
$kodeBarang        = mysqli_fetch_array($kodeBarang);
$kodeBarang        = $kodeBarang['kode_barang'];

$stokBarang = mysqli_query($koneksi, "SELECT data_barang.`stok` FROM data_barang  JOIN masuk_sementara ON data_barang.`kode_barang`=masuk_sementara.`kode_barang` WHERE masuk_sementara.`id` = '$id'");
$stokBarang = mysqli_fetch_array($stokBarang);
$stokBarang = $stokBarang['stok'];
$stokBaru   = $stokBarang - $jml;

$hargaLama = mysqli_query($koneksi, "SELECT data_harga.`harga_beli_old` FROM data_harga JOIN masuk_sementara ON data_harga.`kode_barang`=masuk_sementara.`kode_barang` WHERE masuk_sementara.`id` = '$id'");
$hargaLama = mysqli_fetch_array($hargaLama);
$hargaLama = $hargaLama['harga_beli_old'];

mysqli_query($koneksi, "UPDATE data_harga SET harga_beli = '$hargaLama' WHERE kode_barang = '$kodeBarang'");
mysqli_query($koneksi, "UPDATE data_barang SET stok = '$stokBaru' WHERE kode_barang = '$kodeBarang'");
mysqli_query($koneksi, "DELETE from masuk_sementara where id='$id'");

header("location:form_add.php");
?>