<?php

if(isset($_POST['tombol'])){
    $id = $_GET['id'];
    $stok = htmlspecialchars($_POST['stok']);
    $harga = htmlspecialchars($_POST['harga']);
    $update = mysqli_query($conn,"UPDATE produk SET harga ='$harga',stok = '$stok' WHERE id='$id'");
    header("Location: ../admin/dataproduk.php");
}

?>