<?php
include "connection.php";
$query = "SELECT * FROM student_mark";
$data = $db->query($query);

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
<table border="1px">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Total Mark</td>
        <td>Action</td>
    </tr>
    <?php
    foreach ($data as $array){
        echo "<tr>";
        echo "<td>".$array['id']."</td>";
        echo "<td>".$array['name']."</td>";
        echo "<td>".$array['total_mark']."</td>";
        echo "<td> <a href='update.php?id=".$array['id']."'>Update</a> <a href='delete.php?id=".$array['id']."'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>


