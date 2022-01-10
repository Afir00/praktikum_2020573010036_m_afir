<?php
    if(empty($_GET['x'])){
        echo "<script>window.location = 'cover'</script>";
    }
    elseif($_GET['x']=='cover'){
        require "cover/cover.php";
    }
    elseif($_GET['x']=='signin'){
        require "signin/signin.php";
    }
    elseif($_GET['x']=='signup'){
        require "signin/signup.php";
    }
    else{
        echo "<script>window.location = 'cover'</script>";
    }
?>
