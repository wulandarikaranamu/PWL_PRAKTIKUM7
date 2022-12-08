<?php 
$config = mysqli_connect("localhost", "root", "", "dataweb0080");
if (!$config) {
    die('Gagal terhubung ke MySQLi :'.mysqli_connect_error());
}

?>