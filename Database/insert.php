<?php
include "connection.php";

if (isset($_POST['btn_save'])){
    $name = $_POST['name'];
    $mark = $_POST['total_mark'];
    $insert_query = "INSERT INTO student_mark (name ,total_mark) VALUES ('$name','$mark')";
    $db->exec($insert_query);
    echo "<script>alert('Success')</script>";
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <li><a href="insert.php">Insert</a></li>
    <li><a href="select.php">Select</a></li>
</ul>
<form method="post">
    <input type="text" name="name" placeholder="Enter student name">
    <br>
    <input type="text" name="total_mark" placeholder="Enter student Total Mark">
    <br>
    <button type="submit" name="btn_save">Save</button>
</form>
</body>
</html>
