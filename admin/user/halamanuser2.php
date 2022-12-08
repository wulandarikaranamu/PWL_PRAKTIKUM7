<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <h3>Data User</h3>
    <p>[<a href="user_tambah.php">Tambah User</a>]</p>
    <table width="720" border="1" cellpadding="5" cellspasing="0">
        <tr>
            <th width="30">No.</th>
            <th width="30">Username</th>
            <th width="30">Password</th>
            <th width="30">Nama Lengkap</th>
            <th width="30">Email</th>
            <th width='150'>Kelola</th>
        </tr>
    <?php 
    include "../../config.php";

    $sql = "SELECT user_name, user_password, user_namalengkap, user_email FROM user ORDER BY user_namalengkap";

    $hasil = mysqli_query($config, $sql);
    $no = 1;
    while ($data = mysqli_fetch_array($hasil)) {
?>
<tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $data['user_name']; ?></td>
    <td><?php echo $data['user_password']; ?></td>
    <td><?php echo $data['user_namalengkap']; ?></td>
    <td><?php echo $data['user_email']; ?></td>
    <td align="center">
        <a href="user_edit.php?user_name=<?php echo
        $data['user_name'];?>">Edit</a> |
        <a href="user_hapus.php?user_name=<?php echo
        $data['user_name'];?>">Hapus</a>
    </td>
</tr>
    
<?php
    $no++;
    }
        echo "</table>";
    ?>
    </table>
</body>
</html>