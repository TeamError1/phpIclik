<?php
$koneksi = new mysqli("localhost", "root", "", "db_produk");
$id_produk = $_POST["id_produk"];
$nama_produk = $_POST["nama_produk"];
$harga_produk = $_POST["harga_produk"];
$data = mysqli_query($koneksi, "UPDATE tb_produk SET nama_produk = '$nama_produk', harga_produk = '$harga_produk' WHERE id_produk = $id_produk");
if ($data) {
  echo json_encode(["success" => "Sukses Update Data"]);
} else {
  echo json_encode(["error" => "Gagal Update Data"]);
}
$koneksi->close();
