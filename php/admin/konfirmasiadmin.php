<?php 

include "../logic/logickoneksi.php";
$id = $_GET['id'];

$transaksis = mysqli_query($conn,"SELECT * FROM transaksi INNER JOIN status ON status.id = transaksi.status_id WHERE transaksi.id='$id'");
$transaksi = mysqli_fetch_assoc($transaksis);
$status = 1;
// echo "<pre>";
// print_r($transaksi);
// die;

$query = mysqli_query($conn,"UPDATE transaksi SET status_id = '$status' WHERE id = '$id'");
header('Location: ../admin/datatransaksi.php');





