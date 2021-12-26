<?php
// sesion
session_start();

// koneksi ke database
require 'koneksi.php';

$email = $_POST['username'];
$password = md5($_POST['password']);

$hasil = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$email' && password = '$password'");
$row = mysqli_fetch_assoc($hasil);

if ($hasil) {
    if ((isset($row['username']) && isset($row['password'])) && $row['username'] == $email && $row['password'] == $password) {
        $_SESSION['username'] = $row['username'];
        echo "<script>window.location = '../signin.php?x=home'</script>";
    } else {
        echo "<script>
                        alert('Email atau password yang anda masukkan salah bro...!!');
                        window.location = '../sign-in/signin.php';
                </script>";
    }
}
?>