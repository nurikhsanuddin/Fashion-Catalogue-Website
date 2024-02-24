<?php

session_start();


if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {

    header("Location: backend.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <style>
        body {
            background-color: black;
            background-image: url('assets/background.jpg');
            background-size: cover;
            color: #ffffff;
        }

        .card {
            margin-top: 100px;
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <h1 class="text-center fw-bolder" style="font-weight: bold !important;">SANDIN FASHION</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-1">
            <div class="col-md-4">

                <div class="card border-0 rounded p-5">
                    <div class="card-header  text-white text-center">
                        <h3>Silahkan Login</h3>
                    </div>
                    <div class="card-body ">
                        <form action="proses_login.php" method="post" autocomplete="off">
                            <input autocomplete="false" name="hidden" type="text" style="display:none;">
                            <div class="mb-2">
                                <label for="username" class="form-label text-white">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label text-white">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block w-100 mt-3">Login</button>
                        </form>

                    </div>
                </div>
            </div>
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