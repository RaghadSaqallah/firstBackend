<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "dbConnection.php";


if (isset($_GET['id'])) {
    echo $_GET['id'];
    if (!isset($connection)) {
        die("error in toop");
    }
    mysqli_real_escape_string($connection, $_GET['id']);
    $id = (int) $_GET["id"];
    $sql = "UPDATE allnews SET status = 0 where category_id =$id";
    $result = $connection->query($sql);
    if ($result) {
        echo "Donnneee" . mysqli_affected_rows($connection);
        echo "<a href='ShowNews.php'> show news</a>";
        exit();
    } else
        die("noo" . mysqli_error($connection));
}
