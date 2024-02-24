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

    <title>Daftar Item - SANDIN Fashion</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.min.js"></script>

</head>



<body class="bg-dark text-white">



    <div class="container mt-5">

        <h1 class="text-center mb-4 fw-bolder" style="font-weight: bold !important;">Daftar Item</h1>

        <div class="row mt-3 mb-5">

            <div class="col-md-12">

                <a href="index.php" class="btn btn-outline-primary mx-1">Beranda</a>

                <a href="logout.php" class="btn btn-outline-danger mx-1">Logout</a>

                <a href="backend.php" class="btn btn-warning mx-1">Tambah Data</a>

            </div>

        </div>

        <table id="itemTable" class="table table-bordered table-dark mt-5 mb-5">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Nama</th>

                    <th>Harga</th>

                    <th>Deskripsi</th>

                    <th>Kategori</th>

                    <th>Gambar</th>

                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                <?php

                include('koneksi.php');



                $query = "SELECT * FROM katalog";

                $result = mysqli_query($koneksi, $query);



                $counter = 1;



                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<tr>";

                    echo "<td>" . $counter . "</td>";

                    echo "<td>" . $row['nama'] . "</td>";

                    echo "<td>Rp " . number_format($row['harga']) . "</td>";

                    echo "<td>" . $row['deskripsi'] . "</td>";

                    echo "<td>" . $row['kategori'] . "</td>";

                    echo "<td><img src='uploads/" . $row['gambar'] . "' alt='Gambar' style='max-width: 100px;'></td>";

                    echo "<td><button class='btn btn-danger' onclick='deleteItem(" . $row['id'] . ")'>Hapus</button></td>";

                    echo "</tr>";



                    $counter++;
                }



                mysqli_close($koneksi);

                ?>

            </tbody>

        </table>

    </div>



    <script>
        $(document).ready(function() {

            $('#itemTable').DataTable({

                "order": [

                    [0, "asc"]

                ],

                "pagingType": "full_numbers"

            });



        });

        $('#itemTable').on('click', '.btn-danger', function() {

            var itemId = $(this).closest('tr').find('td:first').text();

            deleteItem(itemId);

        });



        function deleteItem(itemId) {

            if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {

                $.ajax({

                    url: 'delete_item.php',

                    type: 'POST',

                    data: {

                        item_id: itemId

                    },

                    dataType: 'json',

                    success: function(response) {

                        if (response.status === 'success') {

                            alert(response.message);



                            location.reload();

                        } else {

                            alert(response.message);

                        }

                    },

                    error: function() {

                        alert('Terjadi kesalahan saat menghubungi server');

                    }

                });

            }

        }
    </script>

</body>

<footer class="text-center py-3">

    &copy; 2023 SANDIN Fashion. All rights reserved.

</footer>



</html>