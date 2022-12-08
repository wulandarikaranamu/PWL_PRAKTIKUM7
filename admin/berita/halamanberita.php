<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berita</title>
</head>
<body>
    <p align="left">Anda Login Sebagai "<?php echo $_SESSION['username'];?>" | Klik <a href="logout.php">disini</a>untuk logout</p>
    <h3>Data Berita</h3>
    <p><a href="berita_tambah.php">[+Tambah Berita]</a></p>
    <table width='900' border='1' cellpadding="5" cellspacing="0">
        <tr>
            <th width='30'>No.</th>
            <th width='100'>Judul Berita</th>
            <th width='300'>Isi Berita</th>
            <th width='200'>Tanggal Upload</th>
            <th width='350'>Gambar</th>
            <th width='100'>Kelola</th>
        </tr>
        <?php 
        include "config.php";

        $sql="SELECT berita_id, berita_judul, berita_isi, berita_tanggal, berita_gambar FROM berita ORDER BY berita_id";
        $hasil = mysqli_query($config, $sql);

        $no=1;
        while ($data=mysqli_fetch_array($hasil)) {
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['berita_judul']?></td>
                <td><?php echo $data['berita_isi']?></td>
                <td><?php echo $data['berita_tanggal']?></td>
                <td><img src="<?php echo $data['berita_gambar']?>" width="100%" alt=""></td>
            </tr> <?php
        }
        
        ?>
    </table>
</body>
</html>