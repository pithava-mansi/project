<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'css.php'; ?>

</head>
<body>
    <?php include 'menu.php';?>
<div class="container-fluid   ">

<div class="row  d-flex  justify-content-center  mt-3">
    <div class="col-md-4  col-sm-12">
        <!-- <div class="d-flex  justify-content-center  mt-3">
            <img class="logo" src="asset/css/image/saurashtra-university-logo.png" alt="" srcset="">
        </div> -->
        <form class="mt-3 aline-item-center form p-2 mb-3" action="" method="POST">
            <div class="text text-center text-dark">
                <h3>Login</h3>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text m-1 p-2" id="Email"><i class="bi bi-envelope-at"></i></span>
                <input type="email" name="email" class="m-1 p-2" placeholder="Email">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text m-1 p-2" id="username"><i class="bi bi-person-circle"></i></span>
                <input type="text" name="username" class="m-1 p-2" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text m-1 p-2" id="password"><i class="bi bi-shield-lock"></i></span>
                <input type="password" name="password" class="m-1 p-2" placeholder="Password">
            </div>

            <div class="mb-3 text-center">
                <button type="submit" name="submit" class="btn">login</button>
            </div>
            <div class="mb-3 text-center text-black">
                <h3>You Have No Account TO</h3>
            </div>

            <div class="mb-3 text-center">
                <a href="signup.php" type="submit" class="btn">Create Account</a>
            </div>
        </form>
    </div>
</div>
</div>
<?php include 'css.php'; ?>

</body>
</html>