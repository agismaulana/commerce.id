<?php 
    
    function no_session(){
        include "../logic/logickoneksi.php";
        if(!isset($_SESSION['login'])){
            header("Location: ../index/index.php");
        } else {
            $email = $_SESSION['login'];
            $user = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");
            $datauser = mysqli_fetch_assoc($user);
            $role = $datauser['role_id'];
            if($role != 1){ 
                header("Location: ../index/index.php");
            }
        }
    }

    function session(){
        include "../logic/logickoneksi.php";
        $email = $_SESSION['login'];
        $user = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");
        $datauser = mysqli_fetch_assoc($user);
        $role = $datauser['role_id'];
        if($_SESSION['login']){
            if($role >= 2){
                header('Location:../index/index.php');
            }
        }
    }

?>