<?php

if (isset($_POST['submit'])) {
  include "./user/koneksi.php";
  $nama=$_POST['nama'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $alamat=$_POST['alamat'];
  $no_hp=$_POST['no_hp'];
  
  $sql = mysqli_connect('localhost', 'root', '', 'mysite');
  $query = "INSERT INTO user (nama, username, password, alamat, no_hp) VALUES ('$nama', '$username', '$password','$alamat','$no_hp')";
  
  if ( mysqli_query($sql, $query) ) {
      echo 'berhasil tersimpan';
    }else{
      echo 'gagal tersimpan';
    }
}else{
echo"";
}
?>
<?php
session_start();
require('./user/koneksi.php');
    if (isset($_POST["login_btn"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
        $hasil = mysqli_fetch_array($result);
        if($username == "admin_devit" && $password="ganteng"){
          header("Location: ./admin/index.php");
        }else{
        if(mysqli_num_rows($result) == 0){
            header("Location: login.php");
        }else{
            if ($password <> $hasil['password']){
                header("Location: login.php");
            }else{
                $_SESSION['username'] = $hasil['username'];
                header ("Location: ./user/index.php");
                exit;
            }
        }
        $error = true;
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
        @import "./css/login.css";
    </style>
</head>
<body>
    <h6>untuk login sebagai admin username="admin_devit"</h6>
    <h6>untuk login sebagai admin password="ganteng"</h6>
<div class="kotak" >
    <h1>LOGIN</h1>
    <form action="" method="post">
        <label for="" >USERNAME</label>
        <br>
            <div class="col-auto">
                <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="username" placeholder="username">
            </div>
    <br>
    <label>PASSWORD</label>
    <br>
    <div class="col-auto">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="password">
    </div>
    <br>
    <center><button type="submit" name="login_btn" class="btn btn-outline-primary btn-block">LOGIN</button>
    <br>
    </form>
    <a href="register.php"><button type="button" class="btn btn-outline-success btn-block">DAFTAR</button></a></center>
    </div>
</body>
</html>