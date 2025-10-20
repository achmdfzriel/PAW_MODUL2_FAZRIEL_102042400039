<?php
require "connect.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

// TODO: Buat query DELETE untuk menghapus data berdasarkan ID
    // Contoh:
    // $query = "DELETE FROM book_list WHERE id = $id";
    // mysqli_query($conn, $query);
     $query = "DELETE FROM buku WHERE id = $id";
    mysqli_query($conn, $query);

    // TODO: Tambahkan redirect ke list_buku.php setelah delete berhasil
    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
            alert('Data buku berhasil dihapus!');
            document.location.href = 'list_buku.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal menghapus data buku!');
            document.location.href = 'list_buku.php';
        </script>
        ";
    }
}

mysqli_close($conn);
?>
