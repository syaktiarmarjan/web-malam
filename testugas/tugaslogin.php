<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
        <nav class= "navbar navbar-dark" style="background-color:#142266;">
            <a class="navbar-brand" href="#">
                <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30"
                class="d-inline-block align-top" alt="" loading="lazy">
                <h2>SELAMAT DATANG BOSSQUE</h2>
            </a>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="syaktiar">Email Address</label>
                            <input type="email" class="form-control" id="syaktiar"
                            aria-describedby="emailHelp" name="email">          
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass">
                        </div>

                        <button type="submit" class="btn btn-primary" name="login">Submit</button>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>

    <?php
        if (isset($_POST['login'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            if($email == 'syaktiar@marjan' && $pass == '12345'){
                echo "<script>alert ('Selamat Datang Syaktiar')
                    window.location.href='admin';
                </script>";
            }else {
                echo "<script>alert('Kamu Siapa ??')</script>";
            }
        }
    ?>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>