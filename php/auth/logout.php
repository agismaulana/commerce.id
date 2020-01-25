<?php

session_start();
include "../logic/logicpermission.php";
no_session();
$_SESSION['login'];
session_destroy();
session_unset();
header("Location: ../index/index.php");

?>