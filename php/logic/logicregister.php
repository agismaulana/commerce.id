<?php 

if(isset($_POST['tombol'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $repeat = $_POST['repeat'];
    $address = htmlspecialchars($_POST['address']);
    $image = 'default.jpeg';
    $roleid = 2;
    if($repeat == $password){
        mysqli_query($conn,"INSERT INTO user VALUES ('','$name','$email','$password','$image','$roleid','$address')");
        header('Location:login.php');
    }else { 
        header('Location:register.php');    
    }
}

?>