<?php
include('connection.php');
$kode = trim($_POST['kode']);
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$url = $_POST['url_gambar'];
$stok = $_POST['stok'];

$query = "UPDATE `daftar_menu` SET `nama` = '$nama', `harga` = '$harga', `satuan` = '$satuan', `kategori` = '$kategori', `url_gambar` = '$url_gambar', `stok` = '$stok' WHERE `daftar_menu`.`kode` = '$kode'; ";
$result = mysqli_query(openConn(), $query);
if ($result) {
    header("location:index.php");
}else{
    header("location:error.php");
}
?>