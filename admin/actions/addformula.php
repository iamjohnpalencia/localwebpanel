<?php
include '../../resources/conn.php';
include '../../resources/functions.php';
$product_ingredients = $_POST['product_ingredients'];
$primary_unit 		 = $_POST['primary_unit'];
$primary_value 		 = $_POST['primary_value'];
$secondary_unit 	 = $_POST['secondary_unit'];
$secondary_value 	 = $_POST['secondary_value'];
$serving_unit 	     = $_POST['serving_unit'];
$serving_value 	 	 = $_POST['serving_value'];
$no_servings 		 = $_POST['no_servings'];
$unit_cost 		     = $_POST['unit_cost'];
$sql = "INSERT INTO `admin_product_formula_org`(`product_ingredients`, `primary_unit`, `primary_value`, `secondary_unit`, `secondary_value`, `serving_unit`, `serving_value`, `no_servings`, `status`,`unit_cost`) VALUES ('$product_ingredients','$primary_unit','$primary_value','$secondary_unit','$secondary_value','$serving_unit','$serving_value','$no_servings',1,'$unit_cost')";
$result = query($sql);
echo '<script>';
echo 'alert("Added Successfully");';
echo 'self.location = "../index.php?defform";';
echo '</script>';
?>