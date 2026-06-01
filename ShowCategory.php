<link rel="stylesheet" href="style.css">
<?php
include "dbConnection.php";
if ($connection->error == false) {

    $query = "Select * from categories";
    $result = $connection->query($query);

?>

    <div class="table-style">
        <table cellpadding="10px">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows != 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['categ_name'] ?></td>

                        </tr>
                <?php }
                } ?>

            </tbody>

        </table>

    </div>
<?php } ?>