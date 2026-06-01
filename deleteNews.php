    <?php

    include "dbConnection.php";


    if (isset($_GET['id'])) {
        echo $_GET['id'];
        if (!isset($connection)) {
            die("error in toop");
        }
        $id = (int) $_GET["id"];
        $sql = "UPDATE allnews SET status = 0 where id =$id";
        $result = $connection->query($sql);
        if ($result) {
            echo "Donnneee" . mysqli_affected_rows($connection);
            echo "<a href='ShowNews.php'> show news</a>";
            exit();
        } else
            die("noo" . mysqli_error($connection));
    }
