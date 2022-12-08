<?php 
include "config.php";

$user = $_POST['username'];
$pass = $_POST['password'];
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];

$sql = "UPDATE user 
        SET user_password='$pass',
            user_namalengkap='$namalengkap',
            user_email='$email'
        WHERE user_name='$user'";

$sql = mysqli_query($config, $sql);

if($sql){
    echo "Data Berhasil Diubah";
}else{
    echo "Data Gagal Diubah";
}
?>

<br>kembali ke <a href="halamanuser2.php">Halaman User</a>