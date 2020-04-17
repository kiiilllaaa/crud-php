<?php
include('connection.php');
$pro_cod = $_GET['kode'];
$query = "DELETE FROM `daftar_menu` WHERE `daftar_menu`.`kode` = '$pro_cod' ";
$result = mysqli_query(openConn(), $query);
if ($result) {
    header("location:index.php");
}else{
    header("location:error.php");
}
?>