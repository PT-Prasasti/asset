<?php
    include '../koneksi.php';

    $kode_barang    = $_POST['kode_barang'];
    $nama_barang    = $_POST['nama_barang'];
    $satuan         = $_POST['satuan'];
    $keterangan     = $_POST['keterangan'];
    $jenis          = $_POST['jenis'];
    $kategori       = $_POST['kategori'];

    $query  = "UPDATE data_barang SET nama_barang = '$nama_barang', satuan = '$satuan', keterangan = '$keterangan', jenis = '$jenis',  kategori = '$kategori' WHERE kode_barang = '$kode_barang'";
    mysqli_query($koneksi, $query);
    echo "<script>alert('Data Changed Successfully');window.location='index.php'</script>";
?>