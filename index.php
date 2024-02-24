<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANDIN Fashion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .carousel-caption {
            position: absolute;
            right: 0;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            padding: 15px;
            color: #fff;
        }

        .carousel-item img {
            max-width: 100%;
            height: 700px;
            object-fit: cover;
        }

        .carousel-item .card {
            height: 100%;
            border: none;
        }

        .carousel-item .card-img-top {
            height: 400px;
            object-fit: cover;
        }

        .carousel-caption {
            text-align: center;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px;
            color: #343a40;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .jumbotron {
            background-image: url("assets/background.jpg");
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
            background-color: rgba(0, 0, 0) !important;
        }

        .jumbotron img {
            opacity: 0.5;
        }
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>
    <div class="jumbotron fw-bold">
        <h1 class="display-4">Selamat Datang di Sandin Fashion</h1>
        <p class="lead">Tempatnya Gaya yang Menginspirasi dan Berkualitas</p>
    </div>
    <div class="container mt-5">
        <h1 class="text-center mb-4 fw-bolder" style="font-weight: bold !important;">SANDIN FASHION</h1>

        <div id="carouselExample" class="carousel slide mt-4" data-ride="carousel">
            <div class="carousel-inner">

                <?php
                include('koneksi.php');

                $query = "SELECT * FROM katalog ORDER BY id DESC LIMIT 5";
                $result = mysqli_query($koneksi, $query);

                $active = "active";
                echo "<div class='carousel-item $active'>";
                echo "<div class='d-flex justify-content-between'>";

                $count = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='card'>";
                    echo "<img src='uploads/" . $row['gambar'] . "' class='card-img-top' alt='Gambar'>";
                    echo "<div class='card-body text-center'>";
                    echo "<h5 class='card-title fw-bold'  style='font-weight: bold !important;'>" . $row['nama'] . "</h5>";
                    echo "<p class='card-text'>Harga: Rp " . number_format($row['harga'],) . "</p>";
                    echo "</div>";
                    echo "</div>";
                    $count++;

                    if ($count == 3) {
                        break;
                    }
                }

                echo "</div>";
                echo "</div>";
                $active = "";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='carousel-item $active'>";
                    echo "<div class='card'>";
                    echo "<img src='uploads/" . $row['gambar'] . "' class='card-img-top' alt='Gambar'>";
                    echo "<div class='card-body text-center'>";
                    echo "<h5 class='card-title fw-bold'  style='font-weight: bold !important;'>" . $row['nama'] . "</h5>";
                    echo "<p class='card-text'>Harga: Rp " . number_format($row['harga'],) . "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    $active = "";
                }

                mysqli_close($koneksi);
                ?>

            </div>

            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
        <h2 class="text-center mb-4 fw-light mt-5" style="font-weight: light !important;">Tren Terkini, Kualitas Terbaik, Hanya di SANDIN</h2>

    </div>
    <footer class="text-center py-3">
        &copy; 2023 SANDIN Fashion. All rights reserved.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>