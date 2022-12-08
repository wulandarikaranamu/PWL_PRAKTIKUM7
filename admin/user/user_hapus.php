<?php 
    include "config.php";
    $user = $_GET['user_name'];

    $sql = "DELETE FROM user WHERE user_name ='$user'";
    $hasil = mysqli_query($config, $sql);

    echo "<script>alert('Data Berhasil Dihapus')</script>";
    header("location:halamanuser2.php");
    // header("location:halamanuser2.php") ini dimatikan untuk membuat alertnya muncul


?>