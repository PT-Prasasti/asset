<?php
    include '../koneksi.php';

    $id_masuk       = $_POST['id_masuk'];
    $tgl_masuk      = $_POST['tgl_masuk'];
    $kode_barang    = $_POST['kode_barang'];
    $jumlah         = $_POST['jumlah'];
    $harga_beli     = $_POST['harga_beli'];

    $harga_beli= str_replace(".", "", $harga_beli);

    $stokBarang = mysqli_query($koneksi, "SELECT stok FROM data_barang WHERE kode_barang = '$kode_barang'");
    $stokBarang = mysqli_fetch_array($stokBarang);
    $stokBarang = $stokBarang['stok'];
    $stokBaru   = $stokBarang + $jumlah;

    $hargaLama = mysqli_query($koneksi, "SELECT harga_beli FROM data_harga WHERE kode_barang = '$kode_barang'");
    $hargaLama = mysqli_fetch_array($hargaLama);
    $hargaLama = $hargaLama['harga_beli'];

    mysqli_query($koneksi, "UPDATE data_barang SET stok_old = '$stokBarang' WHERE kode_barang = '$kode_barang'");
    mysqli_query($koneksi, "UPDATE data_barang SET stok = '$stokBaru' WHERE kode_barang = '$kode_barang'");
    mysqli_query($koneksi, "UPDATE data_harga SET harga_beli_old = '$hargaLama' WHERE kode_barang = '$kode_barang'");
    mysqli_query($koneksi, "UPDATE data_harga SET harga_beli = '$harga_beli' WHERE kode_barang = '$kode_barang'");
    mysqli_query($koneksi, "INSERT INTO masuk_sementara SET kode_barang = '$kode_barang', id_masuk = '$id_masuk', tgl_masuk = '$tgl_masuk', jumlah = '$jumlah',  harga_beli = '$harga_beli'");

    header("location:form_add.php");
?>