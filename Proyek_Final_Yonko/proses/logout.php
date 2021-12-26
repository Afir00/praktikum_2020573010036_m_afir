<?php
    session_start();
    if (!empty($_SESSION['email'])) {
        session_destroy();
        echo "<script>window.location = '../sign-in/index.php'</script>";
    }elseif (empty($_SESSION['email'])){
        echo "<script>window.location = '../sign-in/index.php'</script>";
    }