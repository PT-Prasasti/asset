<?php
    include 'koneksi.php';
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $hasil = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

    $user = mysqli_num_rows($hasil);

    if($user > 0){
        $data = mysqli_fetch_assoc($hasil);
        $_SESSION['role'] = $data['role'];
        $_SESSION['nama_pegawai']=$data['nama_pegawai'];
        header("location:dashboard/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
?>