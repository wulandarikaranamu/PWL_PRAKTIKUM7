<?php 
session_start();
include("config.php");

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

$sql = "SELECT user_name FROM user
        WHERE  user_name= '$username'
        AND  user_password='$password'";

$hasil = mysqli_query($config,$sql) or exit ("Error query <br>".$sql."</br>");

    if(mysqli_num_rows($hasil)>0) {
        $data=mysqli_fetch_array($hasil);
        $_SESSION['username'] = $data['user_name'];
        header('location:admin/welcome.php');
        exit();

    }else{?>
        <h2>Maaf..</h2>
        <p>nama dan nim anda salah.kilik<a href="login.php"></a>disini untuk kembali login</p><?php
    }

?>