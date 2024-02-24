<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    $status = 'login';
} else {
    $status = 'tidak';
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    body {
        font-family: 'Montserrat', sans-serif;
    }

    .navbar-brand {
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
    }

    .navbar .nav-item.active .nav-link,
    .navbar .nav-item.active .nav-link:hover,
    .navbar .nav-item.active .nav-link:focus {
        color: #ffffff;
        background-color: #252525;
        border-radius: 10px;
        padding-left: 20px;
        padding-right: 20px;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark container-fluid p-3" style="font-size: 16px; background-color:black !important;">
        <a class="navbar-brand" href="index.php">SANDIN FASHION</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="px-3 nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Beranda</a>
                </li>
                <li class="px-3 nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> Tentang</a>
                </li>
                <li class="px-3 nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-book"></i> Katalog
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="katalog_kaos.php">Kaos</a>
                        <a class="dropdown-item" href="katalog_kemeja.php">Kemeja</a>
                        <a class="dropdown-item" href="katalog_celana.php">Celana</a>
                        <a class="dropdown-item" href="katalog_jaket.php">Jaket</a>
                        <a class="dropdown-item" href="katalog_sepatu.php">Sepatu</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="navbar-nav ml-auto">
            <?php

            if ($status == 'login') {
            ?><a class="nav-item nav-link" href="backend.php"><i class="fas fa-user"></i> Admin</a>
            <?php
            } elseif ($status == 'tidak') {
            ?><a class="nav-item nav-link" href="backend.php"><i class="fas fa-user"></i> login</a>
            <?php
            }
            ?>
        </div>
    </nav>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcGgncrEXPDl8Wi1Is/cArEtLV0aQq9aVpkFZZqHYPtP9CJME2I/6a" crossorigin="anonymous"></script>

</html>