<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Signup</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- costum css -->
<link href="../assets/dist/css/signup.css" rel="stylesheet">
</head>
<body>
        <section class="container-fluid mb-4">
            <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
            <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container" action="signup.php" method="POST">
                    <h4 class="text-center font-weight-bold"> Sign-Up </h4>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="Password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                    </div>

                    <button type="submit" name="submit" class="w-100 btn btn-primary btn-dark">Sign-Up</button>
                    <div class="form-footer mt-2">
                    </div>
                </form>
            </section>
            </section>
        </section>
    </body>
</html>