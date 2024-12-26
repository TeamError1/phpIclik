<?php
$koneksi = new mysqli("localhost", "root", "", "db_produk");
$nama_produk = $_POST["nama_produk"];
$harga_produk = $_POST["harga_produk"];
$data = mysqli_query($koneksi, "INSERT INTO tb_produk (nama_produk, harga_produk) VALUES ('$nama_produk', '$harga_produk')");
if ($data) {
  echo json_encode(["success" => "Data berhasil ditambahkan"]);
} else {
  echo json_encode(["error" => "Data gagal ditambahkan"]);
}
$koneksi->close();
