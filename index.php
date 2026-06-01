<?php

include "dbConnection.php";
if ($connection->error == false) {
    $query = "SELECT * FROM allnews WHERE status = 1";
    $result = $connection->query($query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav>
            <div class="container">
                <ul>
                    <li> <a href="index.php">Home</a></li>
                    <li> <a href="LoginForm.php">Login</a></li>
                    <li> <a href="registerForm.php">Register</a></li>
                    <li> <a href="ShowCategory.php">show categories</a></li>
                    <!-- بيعرضهم بجدول و بقدر وقتها اجذف و اعدل -->
                    <!-- <li> <a href="">all news</a></li> -->
                </ul>
            </div>
        </nav>

    </header>

    <main>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="hero">
                <div class="container">
                    <h2><?php echo $row['title'] ?></h2>
                    <p><?php echo $row['news_text'] ?></p>

                    <?php if (!empty($row['image'])): ?>
                        <img src="uploads/<?php echo $row['image'] ?>" width="100%">
                    <?php endif; ?>
                </div>
            </div>
        <?php } ?>
    </main>

</body>


</html>