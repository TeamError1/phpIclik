<?php
// Mengaktifkan CORS agar dapat diakses dari domain mana saja
header("Access-Control-Allow-Origin: *");  // Mengizinkan semua asal
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");  // Mengizinkan metode HTTP tertentu
header("Access-Control-Allow-Headers: Content-Type, Authorization");  // Mengizinkan header tertentu

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "db_produk");

// Mengecek apakah koneksi berhasil
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

// Menjalankan query untuk mengambil data produk
$query = $koneksi->query("SELECT * FROM tb_produk");

// Memeriksa apakah ada data yang ditemukan
if ($query) {
  // Mengambil semua data dari query dalam bentuk array asosiatif
  $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

  // Mengirimkan data dalam format JSON
  echo json_encode($data);
} else {
  // Jika query gagal, kembalikan pesan error
  echo json_encode(["error" => "Gagal mengambil data"]);
}

// Menutup koneksi ke database
$koneksi->close();
?>

