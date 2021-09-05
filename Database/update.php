<?php
include "connection.php";
if (isset($_GET['id'])){
    $id =  $_GET['id'];
    $query = "SELECT * FROM student_mark WHERE id = '$id' ";
    $data = $db->query($query);

}else{
    header("Location:select.php");
}
if (isset($_POST['btn_update'])){
    $name = $_POST['name'];
    $mark = $_POST['total_mark'];
    $query = "UPDATE student_mark SET name='$name', total_mark='$mark' WHERE id = '$id'";
    $db->exec($query);
    header("Location:select.php");
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
<?php
foreach ($data as $array) {
    ?>
    <form method="post">
        <input type="text" name="name" placeholder="Enter student name" value="<?php echo $array['name']?>">
        <br>
        <input type="text" name="total_mark" placeholder="Enter student Total Mark" value="<?php echo $array['total_mark']?>">
        <br>
        <button type="submit" name="btn_update">Update</button>
    </form>
    <?php
}
?>
</body>
</html>
