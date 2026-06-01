<?php
session_start();
include "dbConnection.php";

$id          = $_GET['id'];
$title       = $_GET['title'];
$category_id = $_GET['Category_id'];
$details     = $_GET['details'];
$img         = $_GET['img'];

if (isset($_POST['update'])) {
    $new_title       = $_POST['title'];
    $new_category_id = $_POST['category_id'];
    $new_details     = $_POST['details'];

    if (!empty($_FILES['img']['name'])) {
        $new_img = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], "uploads/" . $new_img);
    } else {
        $new_img = $img;
    }

    $sql = "UPDATE allnews SET title = '$new_title', category_id = '$new_category_id', news_text = '$new_details', image = '$new_img' WHERE id = $id";

    if ($connection->query($sql)) {
        header("Location: ShowNews.php");
        exit();
    }
}

$sql = "SELECT * FROM categories";
$result = $connection->query($sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column;">
    <div class="wrapper">
        <h1>Update News</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="title" value="<?php echo $title; ?>" placeholder="title" required><br>

            <select name="category_id" required style="width: 250px; padding: 5px 10px; font-size: 15px;">
                <option value="">choose category_id</option>
                <?php while ($row = $result->fetch_assoc()) {
                    $selected = ($row['id'] == $category_id) ? "selected" : "";
                ?>
                    <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>>
                        <?php echo $row['categ_name'] ?>
                    </option>
                <?php } ?>
            </select><br>

            <textarea name="details" placeholder="details" required rows="5" cols="30"><?php echo $details; ?>  </textarea><br>


            <div style="margin-bottom: 12px;">
                <span style="font-size: 12px; color: #555;">currant img: <strong><?php echo $img; ?></strong></span><br>
            </div>

            <input type="file" name="img"><br>
            <input type="submit" name="update" value="Update">

        </form>
    </div>
</body>

</html>