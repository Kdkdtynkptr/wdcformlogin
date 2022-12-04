<?php
    include 'koneksi.php'

    $email = $_POST['email'];
    $query = mysqli_query($koneksi, "SELECT * FORM user WHERE email='$email' LIMIT 1");
    if(mysqli_num_rows($query) > 0){
        header('location: form=password.php');
    }
    else{
        header('location: forgot-password.php?pesan=gagal');
    }
?>