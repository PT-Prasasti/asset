<?php
include '../koneksi.php';
 
$simpan = $koneksi->query("INSERT INTO masuk (id_masuk,kode_barang,tgl_masuk,jumlah,harga_beli) SELECT id_masuk,kode_barang,tgl_masuk,jumlah,harga_beli FROM masuk_sementara");
$delete = $koneksi->query("DELETE FROM masuk_sementara");

echo "<script>alert('Data Saved Successfully');window.location='index.php'</script>";
?>