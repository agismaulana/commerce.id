<?php
include "../logic/logickoneksi.php"; 
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM produk WHERE id='$id'");

