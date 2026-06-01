<?php
include "dbConnection.php";

if ($connection->connect_error == false) {

    if (isset($_GET['statusCode']) && $_GET['statusCode'] == '201' && isset($_GET['id'])) {
        $id = (int) $_GET["id"];
        $sql = "UPDATE allnews SET status = 0 WHERE id = $id";
        $result = $connection->query($sql);

        header("Location: ShowNews.php");
        exit();
    }
} else {
    die("Database connection failed");
}

$sql  = "SELECT * FROM allnews WHERE status = 1";
$result = $connection->query($sql);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show News</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="table-style">
        <table cellpadding="10px">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>Category_id</th>
                    <th>details</th>
                    <th>img</th>
                    <th>user_id</th>
                    <th>status</th>
                    <th>edit</th>
                </tr>
            </thead>

            <tbody>
                <?php if ($result->num_rows != 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['category_id'] ?></td>
                            <td><?php echo $row['news_text'] ?></td>
                            <td>
                                <?php if (!empty($row['image'])): ?>
                                    <img src="uploads/<?php echo $row['image'] ?>" width="80px">
                                <?php else: ?>
                                    لا توجد صورة
                                <?php endif; ?>
                            </td>
                            <td><?php echo $row['user_id'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td style="padding: 15px;"> <a href="updateNews.php?id=<?php echo $row['id'] ?>&title=<?php echo $row['title'] ?>&Category_id=<?php echo $row['category_id'] ?>&details= <?php echo $row['news_text'] ?>&img=<?php echo $row['image'] ?>" class="update">update Category</a>
                                <br> <br><a href="?id=<?php echo $row['id'] ?>&statusCode=201" class="delete">delete Category </a>
                            </td>
                        </tr>
                <?php }
                } ?>

            </tbody>
        </table>
    </div>
</body>

</html>