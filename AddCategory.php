<?php
include "dbConnection.php";
if ($connection->error == false) {

    if (isset($_GET["submit"])) {
        $category =  $_GET["category"];
        $sql = "INSERT INTO categories (categ_name) values ('$category') ";
        $result =  $connection->query($sql);
        if ($result == true) {
            header("Location: Dashboard.php");
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
    <link rel="stylesheet" href="style.css">
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column;">
    <div class="wrapper">
        <h1>Add new Category</h1>

        <form action="" method=" get">
            <input type="text" name="category" placeholder="Category" require>
            <br>
            <input type="submit" name="submit" value="ADD">
        </form>
    </div>
</body>

</html>