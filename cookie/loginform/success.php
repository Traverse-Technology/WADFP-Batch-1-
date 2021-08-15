<?php
if (isset($_COOKIE['email'])){
    echo $_COOKIE['email'];

    if (isset($_GET['btn_logout'])){
        setcookie("email","",time()-3600);
        echo "<script>alert('Cookie is already destroyed')</script>";
        header("Refresh:0; url=loginform.php");
    }

}else{
    echo "<script>alert('You need to login first')</script>";
    header('Refresh:0; url=loginform.php');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Success</title>
  </head>
  <body>

  <form method="get">
  <button type="submit" name="btn_logout" class="btn btn-danger">logout</button>
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>