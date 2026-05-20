<!-- اضافة فئات -->

<?php
session_start();

if (isset($_SESSION['user']) != true) {
    header("Location:LoginForm.php");
}
$name = $_SESSION['user']['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Hello <?php echo $name ?></h1>

    <p> <a href="AddCategory.php"> Add Categories</a></p>
    <p> <a href="ShowCategory.php"> Show Categories</a></p>
    <p> <a href="ShowNews.php"> View News</a></p>
    <p> <a href="AddNews.php"> Add News</a></p>
    <p> <a href="ViewDeletedNews.php"> view deleted News</a></p>

</body>

</html>