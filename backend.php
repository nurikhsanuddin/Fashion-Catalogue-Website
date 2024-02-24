<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {

    echo '<script>
            alert("Anda Belum Login");
            window.location.href = "login.php";
          </script>';
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload Data</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> -->
</head>

<body class="bg-dark">

    <div class="container mt-5 text-white">
        <h1>Tambah Katalog</h1>
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="index.php" class="btn btn-outline-primary mx-1">Beranda</a>
                <a href="logout.php" class="btn btn-outline-danger mx-1">Logout</a>
                <a href="list_item.php" class="btn btn-info mx-1">Daftar Item</a>
            </div>
        </div>


        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-5">
                <label for="nama" class="form-label">Nama Item:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="text" class="form-control" id="harga" name="harga" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori:</label>
                <select class="form-select" id="kategori" name="kategori" required>
                    <option value="kaos">Kaos</option>
                    <option value="kemeja">Kemeja</option>
                    <option value="celana">Celana</option>
                    <option value="jaket">Jaket</option>
                    <option value="sepatu">Sepatu</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar:</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-warning w-100">Tambah Data</button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcGgncrEXPDl8Wi1Is/cArEtLV0aQq9aVpkFZZqHYPtP9CJME2I/6a" crossorigin="anonymous"></script>

</body>
<footer class="text-center py-3">
    &copy; 2023 SANDIN Fashion. All rights reserved.
</footer>

</html>