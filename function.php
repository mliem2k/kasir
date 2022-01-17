<?php

session_start();

//Bikin Koneksi
$c = mysqli_connect('localhost','root','','kasir');


//Login
if(isset($_POST['login']))
//variable
{
$username = $_POST['username'];
$password = $_POST['password'];

$check = mysqli_query($c, "SELECT * FROM user WHERE username='$username' and password='$password'");
$hitung = mysqli_num_rows($check);

    if($hitung>0)
    {
        //Jika datanya ditemukan
        //Berhasil Login
        $_SESSION['login'] = 'True';
        header('location:index.php');
    }
    else
    {
        //Data tidak ditemukan
        //Gagal Login
        echo '
        <script>alert("Username atau Password Salah");
        window.location.href="login.php"
        </script>
        ';
    }
}


?>