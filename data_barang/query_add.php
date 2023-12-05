<?php
    include '../koneksi.php';

    $kode_barang    = $_POST['kode_barang'];
    $nama_barang    = $_POST['nama_barang'];
    $satuan         = $_POST['satuan'];
    $keterangan     = $_POST['keterangan'];
    $jenis          = $_POST['jenis'];

    $query  = "INSERT INTO data_barang SET kode_barang = '$kode_barang', nama_barang = '$nama_barang', jenis = '$jenis', keterangan = '$keterangan', satuan = '$satuan',  stok = '0'";
    mysqli_query($koneksi, $query);
    echo "<script>alert('Data Berhasil di Simpan');window.location='index.php'</script>";
?>