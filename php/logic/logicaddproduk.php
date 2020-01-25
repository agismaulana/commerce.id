<?php 

$produk = mysqli_query($conn,"SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id");
$fetchproduk = mysqli_fetch_assoc($produk);
// echo "<pre>";
// print_r($fetchproduk);
// die;

if(isset($_POST['tombol'])){
    $nama = htmlspecialchars($_POST['nama']);
    $kode = htmlspecialchars($_POST['kode']);
    $harga = htmlspecialchars($_POST['harga']);
    $tanggal = date('Y-m-d');
    $stok = htmlspecialchars($_POST['stok']);
    $kategori = $_POST['kategori'];
    $kondisi = $_POST['kondisi'];
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $fileTmpPath = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
    if (in_array($fileExtension, $allowedfileExtensions)) {
        move_uploaded_file($fileTmpPath, '../../img/produk/'.$fileName);
    } else {
      echo " <script>alert('file yang anda upload tidak sesuai');</script>";
    }

    $query = mysqli_query($conn,"INSERT INTO produk VALUES ('','$kode','$nama','$fileName','$kategori','$harga','$stok','$kondisi','$deskripsi','$tanggal')");
    header("Location: ../admin/dataproduk.php");
} else {
    echo "<script>alert('silahkan isi produk!!')</script>";
}
?>