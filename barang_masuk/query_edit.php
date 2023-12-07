<?php
    include '../koneksi.php';

    $id             = $_POST['id'];
    $id_masuk       = $_POST['id_masuk'];
    $tgl_masuk      = $_POST['tgl_masuk'];
    $kode_barang    = $_POST['kode_barang'];
    $jumlah         = $_POST['jumlah'];
    $harga_beli     = $_POST['harga_beli'];

    $harga_beli= str_replace(".", "", $harga_beli);

    $stokBarang = mysqli_query($koneksi, "SELECT stok_old FROM data_barang WHERE kode_barang = '$kode_barang'");
    $stokBarang = mysqli_fetch_array($stokBarang);
    $stokBarang = $stokBarang['stok_old'];
    $stokBaru   = $stokBarang + $jumlah;

    $hargaLama = mysqli_query($koneksi, "SELECT harga_beli FROM data_harga WHERE kode_barang = '$kode_barang'");
    $hargaLama = mysqli_fetch_array($hargaLama);
    $hargaLama = $hargaLama['harga_beli'];

    mysqli_query($koneksi, "UPDATE data_barang SET stok = '$stokBaru' WHERE kode_barang = '$kode_barang'");
    mysqli_query($koneksi, "UPDATE data_harga SET harga_beli_old = '$hargaLama' WHERE kode_barang = '$kode_barang'");
    mysqli_query($koneksi, "UPDATE data_harga SET harga_beli = '$harga_beli' WHERE kode_barang = '$kode_barang'");
    mysqli_query($koneksi, "UPDATE masuk SET id_masuk = '$id_masuk', tgl_masuk = '$tgl_masuk', kode_barang = '$kode_barang', jumlah = '$jumlah', harga_beli = '$harga_beli' WHERE id = '$id'");

    echo "<script>alert('Data Changed Successfully');window.location='index.php'</script>";
?>