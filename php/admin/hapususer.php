<?php 

include "../logic/logickoneksi.php";
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM user WHERE id = '$id'");
mysqli_query($conn,"DELETE FROM transaksi WHERE user_id = '$id'");
mysqli_query($conn,"DELETE FROM keranjang WHERE user_id = '$id'");
mysqli_query($conn,"DELETE FROM pesan WHERE user_id ='$id'");
header("Location: ../admin/datauser.php");
?>