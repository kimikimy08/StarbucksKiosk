<?php 
require "database/conn.php";
$Display = mysqli_query($link, "SELECT * FROM menu ");
if(isset($_POST['Save'])){
    $PID =  $_POST['Save'];
    $C = $_POST['menu_id'];
    $PN = $_POST['menu_category'];
    $PT = $_POST['menu_name'];
    $P = $_POST['menu_price'];
    $D = $_POST['menu_description'];
    
    $UP = "UPDATE menu SET menu_id = '$C', menu_category = '$PN', menu_name = '$PT', menu_price = '$P', menu_description = '$D' WHERE menu_id = '$PID' ";
    mysqli_query($link,$UP);
    header("location: Table.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Table.css">
</head>
<br>
<?php
include('include/back/back.php');
?>
<table>
    <tr>
            <th>Menu ID</th>
            <th>Category</th>
            <th>Menu Name</th>
            <th>Menu Price</th>
            <th>Menu Description</th>
            <th></th>
        </tr>
<?php if(mysqli_num_rows($Display)){
          $i=0;
          while($Table = mysqli_fetch_array($Display)){
        ?>
<tr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <td><input type="text" name="menu_id" value="<?=$Table["menu_id"]?>"></td>
            <td><input type="text" name="menu_category" value="<?=$Table["menu_category"]?>"></td>
            <td><input type="text" name="menu_name" value="<?=$Table["menu_name"]?>"></td>
            <td><input type="text" name="menu_price" value="<?=$Table["menu_price"]?>"></td>
            <td><input type="text" name="menu_description" value="<?=$Table["menu_description"]?>"></td>
            <td>
                <?php $PIDD = $Table["menu_id"] ?>
                
                
                <Button type="Submit" class="Button" name="Save" value="<?= $PIDD?>">Save</Button>
                
            </td>
            </form>
        </tr>
        <?php
                }//while end
            }
        ?>

        </table>
</html>