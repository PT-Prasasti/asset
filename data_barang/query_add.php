<?php
    include '../koneksi.php';

    $kode_barang    = $_POST['kode_barang'];
    $nama_barang    = $_POST['nama_barang'];
    $satuan         = $_POST['satuan'];
    $keterangan     = $_POST['keterangan'];
    $jenis          = $_POST['jenis'];

    $query  = "INSERT INTO data_barang SET kode_barang = '$kode_barang', nama_barang = '$nama_barang', jenis = '$jenis', keterangan = '$keterangan', satuan = '$satuan',  stok = '0'";
    mysqli_query($koneksi, $query);

    $query2 = "INSERT INTO data_harga SET kode_barang = '$kode_barang', harga_beli = '0', harga_beli_old = '0', harga_jual = '0', harga_jual_old = '0'";
    mysqli_query($koneksi, $query2);
    echo "<script>alert('Data Saved Successfully');window.location='index.php'</script>";
?>