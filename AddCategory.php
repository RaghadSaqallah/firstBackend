<?php
include "dbConnection.php";
if ($connection->error == false) {

    if (isset($_GET["submit"])) {
        $category =  $_GET["category"];
        $sql = "INSERT INTO categories (categ_name) values ('$category') ";
        $result =  $connection->query($sql);
        if ($result == true) {
            echo "<a href='ShowCategory.php'>show Category </a>";
            exit();
        } else {
            echo "fail to insert";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>

<body>

    <form action="" method="get">
        <h1>Add new Category</h1>
        <input type="text" name="category" placeholder="Category" require>
        <input type="submit" name="submit" value="ADD">
    </form>

</body>

</html>