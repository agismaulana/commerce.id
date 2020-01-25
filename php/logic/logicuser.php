<?php 
$jumlahdataperhalaman = 3;
$result = mysqli_query($conn,"SELECT * FROM user");
$jumlah = mysqli_num_rows($result);
$jumlahhalaman = ceil($jumlah / $jumlahdataperhalaman);
$halaktif = ( isset ($_GET['page']) ) ? $_GET['page'] : 1;
$dataawal = ($jumlahdataperhalaman * $halaktif) - $jumlahdataperhalaman;

$user = mysqli_query($conn,"SELECT user.*,role.role as namarole FROM user INNER JOIN role ON user.role_id = role.id LIMIT $dataawal,$jumlahdataperhalaman");
$fetchuser = mysqli_fetch_assoc($user);
// echo "<pre>";
// print_r($fetchuser);
// die;
