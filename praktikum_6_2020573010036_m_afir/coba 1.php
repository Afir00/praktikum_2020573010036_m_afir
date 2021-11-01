<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koneksi database mySQL</title>
</head>
<body>
<h1>Demo Koneksi database mySQL</h1>
    <?php
        $conn = mysqli_connect ("localhost","root","","db_saya");
        if ($conn)
        {
            echo "server terkoneksi";
        }
        else
        {
            echo "server tidak terkoneksi";
        }
    ?>
</body>
</html>