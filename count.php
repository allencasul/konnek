<?php
include 'postock-database.php';

    $sql = "SELECT * FROM postock_container ORDER BY id DESC";
    $result = mysqli_query($con, $sql) or die($con->error);
    $total = $result->num_rows;
    if($total > 0)
    {
        echo $total;
    }
?>
