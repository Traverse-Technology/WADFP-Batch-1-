<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Register System</title>
</head>
<body>
<h1 class="text-center text-primary mt-4">Register System</h1>
<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary" name="btn_login">Submit</button>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>
</html>

<?php

if (isset($_POST['btn_login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $loginStatus = null;
    $file = fopen('user.txt','r') or die('Unable to open file');
    $userdata = fread($file,filesize('user.txt'));
    $userArray = explode("\n", $userdata);

    for ($i=0; $i<=count($userArray)-1; $i++){
        $registerData = explode("/", $userArray[$i]);
        if ($email == $registerData[0] and $password == $registerData[1]){
            header('Location:loginSuccess.php');
        }else{
            $loginStatus = "fail";
        }
    }
    if ($loginStatus){
        echo "<script>alert('login fail')</script>";
    }
fclose($file);


}