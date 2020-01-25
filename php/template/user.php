<?php 
   include "../logic/logickoneksi.php";
   $email = $_SESSION['login'];
   $user = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");    
   $datauser = mysqli_fetch_assoc($user);
   
?>