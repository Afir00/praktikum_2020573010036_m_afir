<?php
 if(empty($_GET['x'])){
    echo "<script>window.location = 'cover'</script>";
}
elseif($_GET['x']=='cover'){
    require "cover.php";
}
elseif($_GET['x']=='album'){
    require "album.php";
}
elseif($_GET['x']=='dashboard'){
    require "dashboard.php";
}
elseif($_GET['x']=='footers'){
    require "footers.php";
}
elseif($_GET['x']=='headers'){
    require "headers.php";
}
?>