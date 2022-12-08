<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data</title>
</head>
<body>
    <?php 
    include "config.php";
    $user = $_GET['user_name'];

    $sql = "SELECT * FROM user WHERE user_name='$user'";
    $hasil = mysqli_query($config, $sql);
    $data = mysqli_fetch_assoc($hasil);
    ?>

    <h3>Ubah Data Username</h3>
    <form action="user_edit_action.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>
                    <input type="text" value="<?php echo $data['user_name']?>" disabled>
                    <input type="text" name="username" value="<?php echo $data['user_name']?>" hidden>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td> : </td>
                <td>
                    <input type="password" name="password" value="<?php echo $data['user_password']?>">
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td> : </td>
                <td>
                    <input type="text" name="namalengkap" value="<?php echo $data['user_namalengkap']?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> : </td>
                <td>
                    <input type="email" name="email" value="<?php echo $data['user_email']?>">
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="ubah" value="simpan">
                    <input type="submit" value="batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>