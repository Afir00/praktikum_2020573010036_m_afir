<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Buku tamu untuk database Mysql</h1>
    <form action = "bukutamu_add_form.php"method="post">
        Nama :<input type="text" name="nama" size = "35" maxlength="50"><br>
        email:<input type="text" name="email"size="35" maxlength="50"><br>
        komentar:<textarea name="komentar" rows="5"cols="30"></textarea><br>
        <input type="submit" value="Simpan">
        <input type="reset" value="reset">
</form>
</body>
</html>