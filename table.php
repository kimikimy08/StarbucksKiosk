<?php
require "conn.php";
$Display = mysqli_query($link, "SELECT * FROM menu ");
$cin = "";

if (isset($_POST['Delete'])) {
    $delete = $_POST['Delete'];
    $Pdel = "DELETE FROM menu WHERE menu_id ='$delete'";
    echo $Pdel;
    mysqli_query($link, $Pdel);

    echo "<meta http-equiv='refresh' content='0'>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Table.css">
</head>



<body>
    <br>
    <?php
    include('include/back/back.php');
    ?>
    <!-- <br> -->

    <table>
        <tr>
            <th>Menu ID</th>
            <th>Category</th>
            <th>Menu Name</th>
            <th>Menu Price</th>
            <th>Menu Description</th>
            <th><a href="TableEdit.php"><button class="Button" id="EDIT">Edit</button></a></th>
        </tr>
        <?php if (mysqli_num_rows($Display)) {
            $i = 0;
            while ($Table = mysqli_fetch_array($Display)) {
        ?>
                <tr>
                    <td><?= $Table["menu_id"] ?></td>
                    <td><?= $Table["menu_category"] ?></td>
                    <td><?= $Table["menu_name"] ?></td>
                    <td><?= $Table["menu_price"] ?></td>
                    <td><?= $Table["menu_description"] ?></td>
                    <td>
                        <?php $PID = $Table["menu_id"] ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">


                            <Button type="submit" class="Button" name="Delete" value="<?= $PID ?>">Delete</Button>
                        </form>
                    </td>
                </tr>


        <?php
            } //while end
        }
        ?>

    </table>


</body>

</html>