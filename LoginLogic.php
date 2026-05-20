<?php
session_start();


include "dbConnection.php";
if ($connection->error == false) {
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];


        $query = "Select * from users where email = '$email'";
        $result = $connection->query($query);


        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            // 
            if (password_verify($password, $data['PASSWORD'])) {
                $_SESSION['user'] = $data;
                print_r($data);

                header("Location: Dashboard.php");
            } else
                echo "wrong password";
        } else
            echo "log in fail";
    }
} else
    echo "cannot connect";
