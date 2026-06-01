<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="style.css">

</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column;">
    <div class="wrapper">
        <h1>Create Account</h1>

        <form action="registerLogic.php" method="post">
            <input type="text" name="name" placeholder="UserName" require><br>
            <input type="email" name="email" placeholder="Email" require><br>
            <input type="password" name="password" placeholder="password" require><br>
            <input type="submit" value="create" name="submit"><br>

        </form>

    </div>

</body>

</html>