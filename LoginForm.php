<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <center>
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
            <input type="submit" name="submit" value="login">

        </form>

    </center>
</body>

</html>