<?php
include '../../resources/conn.php';
include '../../resources/functions.php';
$inventory_id =  $_POST['inventory_id'];
$product_ingredients = $_POST['product_ingredients'];
$critical_limit = $_POST['critical_limit'];
$datenow = FullDateFormat24HR();
$maininventoryid = $_POST['maininventoryid'];

$sql = "UPDATE `admin_pos_inventory_org` SET `product_ingredients`='$product_ingredients',`critical_limit`= $critical_limit ,`date_modified`= '$datenow',`main_inventory_id`= $maininventoryid WHERE server_inventory_id = " . $inventory_id;
$result = mysqli_query($connection, $sql);
// echo $sql;
echo '<script>';
echo 'alert("Updated Successfully");';
echo 'self.location = "../index.php?definv";';
echo '</script>';
?>

