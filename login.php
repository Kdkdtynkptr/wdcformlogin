<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli akun PUBG di @kulstore.pubg</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="Log In TWDC.css">
<style>
    body{
        background-color: black;
    }
</style>
</head>
<body>
<center>    
    <form action="proseslogin.php">
    <div>
        <img src="Logo Kulstore.jpg" alt="" height="150px" width="150px">
        <h1 class="warning">Log In</h1>
        <?php
            if (isset($_GET['pesan'])){
                if ($_GET['pesan'] == "gagal"){
                    echo "<span style='color:yellow'>Login gagal! username dan password salah!</span>";
                }
            }
        ?>
    </div>
    <br>
    <form>
    <div class="col-sm-4">
        <input type="email" placeholder="Alamat E-Mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <br>
    <div class="col-sm-4">
        <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <div>
        <td>
            <h5 class="warning kecil">Belum memiliki akun?</h5>
            <a class="warning" href="singup.php"><h5 class="kecil">Daftar disini</h5></a>
        </td> 
    </div>
    <div>
        <td>
            <h5 class="warning kecil">Lupa Password</h5>
            <a class="warning" href="forgot-password.php"><h5 class="kecil">Reset Password Disini</h5></a>
        </td>
    </div> 
</center>
</body>
</html>




