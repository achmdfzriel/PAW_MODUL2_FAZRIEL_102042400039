<?php
require "connect.php";

if (isset($_POST["create"])) {
    $judul          = $_POST["xjudul"];
    $penulis        = $_POST["xpenulis"];
    $penerbit       = $_POST["xpenerbit"];
    $tahun_terbit   = $_POST["xtahun_terbit"];
    $genre          = $_POST["xgenre"];
    $jumlah_halaman = $_POST["xjumlah_halaman"];
    $stok           = $_POST["xstok"];

    // TODO: Buat query INSERT ke tabel book_list menggunakan data dari form di atas.
    // Contoh:
    // $query = "INSERT INTO book_list (...) VALUES (...)";
    // mysqli_query($conn, $query);

    // TODO: Tambahkan pengecekan apakah data berhasil ditambahkan
    // Gunakan mysqli_affected_rows($conn) > 0 untuk menentukan keberhasilan

    // Query INSERT ke tabel buku
    $query = "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, genre, jumlah_halaman, stok)
              VALUES ('$judul', '$penulis', '$penerbit', '$tahun_terbit', '$genre', '$jumlah_halaman', '$stok')";

    // Eksekusi query
    mysqli_query($conn, $query);

    // Cek apakah data berhasil dimasukkan
    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
            alert('Data buku berhasil ditambahkan!');
            document.location.href = 'list_buku.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal menambahkan data buku!');
            document.location.href = 'form_create_buku.php';
        </script>
        ";
    }
}
?>
