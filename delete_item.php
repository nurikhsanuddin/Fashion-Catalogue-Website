<?php

include('koneksi.php');

if (isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];


    $query = "DELETE FROM katalog WHERE id = $item_id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo json_encode(array('status' => 'success', 'message' => 'Item berhasil dihapus'));
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Gagal menghapus item'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Data tidak valid'));
}

mysqli_close($koneksi);
