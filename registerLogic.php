<?php

include "dbConnection.php";

if ($connection->error == false) {

    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        echo "herr";

        $query = "INSERT INTO users (name,email, password) VALUES ('$name' ,'$email','$password')";

        $result = $connection->query($query);

        if ($result == true) {
            header("Location:LoginForm.php?statusCode=201");
            exit();
        } else {
            echo "fail to insert";
        }
    } else {
        echo "create error";
    }
} else {
    echo "erro data0";
}
