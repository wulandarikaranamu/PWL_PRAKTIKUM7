<?php 
    include "config.php";

    $judul = $_POST["judul"];
    $isiberita= $_POST["isi"];
    $tgl_upload = $_POST["tanggal"];
    $username = $_POST["user_name"];

    //nama file temporary yang akan disimpan di server
    $lokasifile = $_FILES['gambar']['tmp_name'];
    //membaca nama file yang akan diupload
    $namafile = $_FILES['gambar']['name'];

    //folder penyimpanan berkas/file
    $uploaddir = "uploads/";
    //menggabungkan nama folder dan nama file
    $uploadfile = $uploaddir.$namafile;

    //jika file berhasil di upload
    if(move_uploaded_file($lokasifile, $uploadfile)) {
        echo "Nama File : <br>$namafile</b> sukses di upload";

        //masukkan informasi file ke dalam database
        $sql = "INSERT INTO berita(berita_judul, berita_isi, berita_gambar, berita_tanggal_user_name) VALUES('$judul','$isiberita','$uploadfile','$tgl_upload','$username')";
        $hasil = mysqli_query($config, $sql);
        header('location:halamanberita.php');

    } else {
        echo "File gagal disimpan";
    }
?>