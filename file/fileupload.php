<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>File upload</title>
</head>
<body>
<h1 class="text-center text-primary mt-5">File upload</h1>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlFile1">Choose file</label>
            <input type="file" name="fileupload" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button class="btn btn-primary" type="submit" name="upload">File upload</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>

<?php

if (isset($_POST["upload"])){

    if ($_FILES["fileupload"]["type"] == "image/jpeg" or $_FILES["fileupload"]["type"] == "image/png"){
        $savefile = "image/".time().$_FILES["fileupload"]["name"];
        move_uploaded_file($_FILES["fileupload"]["tmp_name"] ,$savefile);
        echo "<script>alert('Upload Success!')</script>";
    }else{
        echo "<script>alert('Only access JPEG and png')</script>";
    }

}



