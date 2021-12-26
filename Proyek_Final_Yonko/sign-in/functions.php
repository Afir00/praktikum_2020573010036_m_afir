<?php

$conn = mysqli_connect("localhost", "root", "", "yonko");

function registerasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["$username"]));
    $password = mysqli_real_escape_string($data["$conn,$password"]);
    $password2 = mysqli_real_escape_string($data["%$conn,$password2"]);

    if ($password !== $password2){
        echo"<script>
                alert('Konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    return 1;
}
?>