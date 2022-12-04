<?php
    session_start();
    include 'koneksi.php';
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $data = mysqli_query($koneksi,"SELECT * FORM user WHERE email ='$email")
    $row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Halaman Admin</h2>
    <br>
    <h4>Selamat Datang, <?= $row['nama']; ?>! anda telah login.</h4>
    <br>
    <br>
    <a href="../singup.php">Log Out</a>
</body>
</html>