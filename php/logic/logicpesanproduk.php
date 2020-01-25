<?php 

    if(isset($_POST['tombol'])){
        $id = $_GET['id'];
        $produks = mysqli_query($conn,"SELECT produk.* FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id WHERE produk.id = '$id'"); 

        $produk = mysqli_fetch_assoc($produks); 
        // echo "<pre>";
        // print_r($produk);
        // die;

        // echo"<pre>";
        // print_r($datauser);
        // die;
        $status = $_POST['pembayaran'];
        if($status == 1){
            $status = "pemesanan masih di proses";
        }
        $produkid = $produk['id'];
        $userid = $datauser['id'];
        $jumlah = $_POST['jumlah'];
        $total = $jumlah * $produk['harga'];
        $tanggal = date('Y-m-d');
        // var_dump($userid);
        $pesan = mysqli_query($conn,"INSERT INTO pesan VALUES ('','$produkid','$userid','$jumlah','$total','$status','$tanggal')");
        $hapusKeranjang = mysqli_query($conn,"DELETE FROM keranjang WHERE produk_id='$id'");
        // header("Location: ../index/pesanan.php");
    }