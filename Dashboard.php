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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <ul>
                    <li> <a href="index.php"> home</a></li>
                    <li> <a href="AddCategory.php"> Add Categories</a></li>
                    <li> <a href="ShowCategory.php"> Show Categories</a></li>
                    <li> <a href="ShowNews.php"> View News</a>
                    </li>
                    <li> <a href="AddNews.php"> Add News</a>
                    </li>
                    <li> <a href="ViewDeletedNews.php"> view deleted News</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <div class="container">
        <h1>Hello <?php echo $name ?></h1>


    </div>






</body>

</html>