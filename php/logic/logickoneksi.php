<?php

$conn = mysqli_connect("localhost","root","") or die ("connection is not found");
        mysqli_select_db($conn,"commerce") or die ("database is not found");

?>