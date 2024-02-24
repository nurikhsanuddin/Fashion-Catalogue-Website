<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Katalog Sepatu - SANDIN Fashion</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <style>
        body {

            font-family: 'Montserrat', sans-serif;

        }







        .card-img-top {

            height: 300px;

            object-fit: cover;

        }



        .modal-img {

            max-width: 100%;

            height: auto;

        }
    </style>

</head>



<body>

    <?php include('navbar.php'); ?>



    <div class="container mt-5">

        <h1 class="text-center mb-4 fw-bolder" style="font-weight: bold !important;">Katalog Sepatu</h1>



        <div class="row">

            <?php

            include('koneksi.php');



            $query = "SELECT * FROM katalog WHERE kategori = 'sepatu'";

            $result = mysqli_query($koneksi, $query);





            while ($row = mysqli_fetch_assoc($result)) {

                echo "<div class='col-md-4 mb-4'>";

                echo "<div class='card'>";

                echo "<img src='uploads/" . $row['gambar'] . "' class='card-img-top' alt='" . $row['nama'] . "'>";

                echo "<div class='card-body text-center'>";

                echo "<h5 class='card-title fw-bold' style='font-weight: bold !important;'>" . $row['nama'] . "</h5>";

                echo "<p class='card-text'>Harga: Rp " . number_format($row['harga'],) . "</p>";



                echo "<button type='button' class='btn btn-outline-dark w-100' data-bs-toggle='modal' data-bs-target='#itemModal" . $row['id'] . "'>Detail</button>";

                echo "</div>";

                echo "</div>";

                echo "</div>";





                echo "<div class='modal fade' id='itemModal" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";

                echo "<div class='modal-dialog' role='document'>";

                echo "<div class='modal-content text-center'>";

                echo "<div class='modal-header'>";

                echo "<h5 class='modal-title' id='exampleModalLabel'>" . $row['nama'] . "</h5>";

                echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'>";

                echo "<span aria-hidden='true'>&times;</span>";

                echo "</button>";

                echo "</div>";

                echo "<div class='modal-body'>";

                echo "<img src='uploads/" . $row['gambar'] . "' class='img-fluid modal-img' alt='" . $row['nama'] . "'>";

                echo "<p class='mt-3'>Harga: Rp " . number_format($row['harga'],) . "</p>";

                echo "<p>" . $row['deskripsi'] . "</p>";

                echo "</div>";

                echo "<div class='modal-footer'>";

                echo "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Tutup</button>";

                echo "</div>";

                echo "</div>";

                echo "</div>";

                echo "</div>";
            }



            mysqli_close($koneksi);

            ?>

        </div>

    </div>

    <footer class="text-center py-3">

        &copy; 2023 SANDIN Fashion. All rights reserved.

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>



</html>