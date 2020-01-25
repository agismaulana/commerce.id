<?php 
if(isset($_POST['tombol'])){
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $query = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email' && password = '$password'");
    $fetch = mysqli_fetch_assoc($query);
    if ($fetch == true){
        $_SESSION['login'] = $email;
        if($fetch['role_id'] == 1){
            header("Location: ../admin/admin.php");
        } else { 
            header("Location: ../index/index.php");
        }
    }
}

?>