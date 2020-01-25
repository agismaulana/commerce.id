<?php 
include '../logic/logickoneksi.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM keranjang WHERE produk_id = '$id'");
header('Location: ../index/keranjang.php');

?>