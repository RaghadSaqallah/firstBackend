<?php
session_start();
include "dbConnection.php";
$sql = "SELECT * FROM categories";
$result = $connection->query($sql);
if ($connection->error == false) {
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $category_id = $_POST['category_id'];
        $details = $_POST['details'];
        $user_id = $_SESSION['user']['id'];

        $img = $_FILES['img']['name'];
        if (!empty($_FILES['img']['name'])) {
            move_uploaded_file($_FILES['img']['tmp_name'], "uploads/" . $img);
        } else {
            $img = ""; // لو ما رفع صورة
        }


        $sql = "INSERT INTO allnews (title , category_id ,news_text ,image,user_id,status) VALUES ('$title' ,'$category_id' ,'$details' ,'$img' , '$user_id','1')";

        $result = $connection->query($sql);
        if ($result == true) {
            header("Location: Dashboard.php");
        } else {
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add news</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column;">
    <div class="wrapper">
        <h1>Add new News</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="title" require> <br>
            <select name="category_id" require style="width: 250px; padding: 5px 10px; font-size: 15px;">

                <option value="">chose category_id</option>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id']; ?>"> <?php echo $row['categ_name'] ?></option>
                <?php } ?>
            </select><br>

            <textarea name="details" placeholder="details" require rows="5" cols="30"> </textarea><br>
            <input type="file" name="img"><br>
            <input type="submit" name="add" value="Add">

        </form>
    </div>
</body>

</html>