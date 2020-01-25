<?php 

if(isset($_POST['tombol'])){
    $fileTmpPath = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
    if($fileName){
        $id = $_GET['id'];  
        $produkid = $pesan['id'];
        $userid = $pesan['user_id'];
        $stok = $pesan['stok'];
        if (in_array($fileExtension, $allowedfileExtensions)) {
            move_uploaded_file($fileTmpPath, '../../img/pembayaran/'.$fileName);
        } else {
            echo " <script>alert('file yang anda upload tidak sesuai');</script>";
        }
        $total = $pesan['total'];
        $jumlah = $pesan['jumlah'];
        if($stok > 0){
            $stokAkhir = $stok - $jumlah;
        } else {
            echo "<script>alert('Stok Telah Habis')</script>";
        }
        $status = 2;
        $tanggal = date('Y-m-d');
        $query = mysqli_query($conn,"INSERT INTO transaksi VALUES ('','$produkid','$userid','$jumlah','$total','$status','$fileName','$tanggal')");
        mysqli_query($conn,"DELETE FROM pesan WHERE id = '$id'");
    } else {
    }
}


?>