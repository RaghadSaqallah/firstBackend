<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column;">

    <div class="wrapper">
        <h1>Welcome LOG IN</h1>

        <?php
        if (isset($_GET["statusCode"])) {
            if ($_GET['statusCode'] == "201") {
                echo "Account Created";
            }
        }
        ?>




        <form action="LoginLogic.php" method="post">

            <label for="">Email</label>
            <input type="text" name="email">
            <br>
            <label for="">Password</label>
            <input type="password" name="password">
            <br>
            <br>
            <input type="submit" name="submit" value="login" class="btn">

        </form>

    </div>
</body>

</html>