<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $deskripsi = $_POST["deskripsi"];
    $harga = $_POST["harga"];
    $kategori = $_POST["kategori"];

    $query = "INSERT INTO katalog (nama, deskripsi, harga, gambar, kategori) VALUES ('$nama', '$deskripsi', '$harga', '','$kategori')";
    mysqli_query($koneksi, $query);

    $id_item = mysqli_insert_id($koneksi);

    $target_dir = "uploads/";
    $nama_file = $id_item . ".png";
    $target_file = $target_dir . $nama_file;
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

    $update_query = "UPDATE katalog SET gambar = '$nama_file' WHERE id = $id_item";
    mysqli_query($koneksi, $update_query);
}

mysqli_close($koneksi);

header("Location: index.php");
exit();
