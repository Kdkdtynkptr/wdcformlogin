<?php
    include 'koneksi.php';
    $depan = $_POST['depan'];
    $belakang = $_POST['belakang'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "INSERT INTO user (nama_depan, nama_belakang, email, password)
    VALUES ('$depan','$belakang','$email','$password')";
    $push = mysqli_query($connection,$query);

    if($push){
        header('location:login.php');
    }
    else
    {
        header('location: index.php?pesandaftar_gagal');
    }
?>