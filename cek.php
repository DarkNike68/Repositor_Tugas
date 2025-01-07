<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $iki="SELECT*FROM tb_login WHERE username='$username' AND password='$password'";
    $sql=mysqli_query($connection) or die (mysqli_error($connection));

    if(mysqli_num_rows($sql)==0){
       echo '<script language = "javascript">
       alert("username/password salah);
       document.location="form.php";
       </script>';
    }else{
        echo '<script language = "javascript">
        alert("login sukses);
        document.location="halaman.php";
        </script>';
    }
?>