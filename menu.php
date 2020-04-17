<?php
include('connection.php');
$kode = trim($_POST['kode']);
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$url = $_POST['url_gambar'];
$stok = $_POST['stok'];

$query = "INSERT INTO `daftar_menu` (`kode`, `nama`, `harga`, `satuan`, `kategori`, `url_gambar`, `stok`) 
VALUES ('$kode', '$nama', '$harga', '$satuan', '$kategori', '$url_gambar', '$stok');";
$result = mysqli_query(openConn(), $query);
if ($result) {
    header("location:index.php");
}else{
    header("location:error.php");
}
?>