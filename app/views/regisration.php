<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo BASEURL;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php  linkCSS("assets/css/bootstrap.min.css"); ?>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<h2>Create New Account</h2>
<div class="row">
    <form action="/testController/register" method="POST">
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Enter Name" name="fullname"value="<?php if(!empty($data['fullname'])):echo $data['fullname'];endif; ?>">
            <div class="error">

            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Enter email" name="email" value="<?php if(!empty($data['email'])):echo $data['email'];endif; ?>">
            <div class="error">

            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
            <div class="error">

            </div>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
</body>
</html>

