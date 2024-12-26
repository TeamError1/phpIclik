<?php
$koneksi = new mysqli("localhost", "root", "", "db_produk");

// Ambil id_produk dari POST
$id_produk = $_POST["id_produk"];

// Query hapus data
$data = $koneksi->query("DELETE FROM tb_produk WHERE id_produk = $id_produk");

// Cek hasil eksekusi query
if ($data) {
  echo json_encode(["success" => "Sukses Delete Data"]);
} else {
  echo json_encode(["error" => "Gagal Delete Data"]);
}

// Tutup koneksi
$koneksi->close();
?>

