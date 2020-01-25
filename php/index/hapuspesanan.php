<?php 
include '../logic/logickoneksi.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM pesan WHERE id = '$id'");
header('Location: ../index/index.php');

?>