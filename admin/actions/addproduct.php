<?php
include '../../resources/conn.php';
include '../../resources/functions.php';

$productimage = '';
$pcode = $_POST['pcode'];
$pbar = $_POST['pbarcode'];
$pname = $_POST['pname'];
$pprice = $_POST['pprice'];
$pdesc = $_POST['pdesc'];
$pcat  = $_POST['pcat'];
$pdesc = $_POST['pdesc'];
$pformulaid =  $_POST['pf'];
$datenow = returncurrentdate24HRFULLDAY();

if($_FILES['pimage']['name'] == "") {

} else {
	$product_image = file_get_contents($_FILES["pimage"]["tmp_name"]);
	$product_image = base64_encode($product_image);
}

$sql = "INSERT INTO `admin_products_org`(`product_sku`, `product_name`, `formula_id`, `product_barcode`, `product_category`, `product_price`, `product_desc`, `product_image`, `product_status`, `origin`, `date_modified`) VALUES ('$pcode','$pname','$pformulaid','$pbar','$pcat',$pprice,'$pdesc','$product_image','1','Server','$datenow')";
$result = query($sql);
echo '<script>';
echo 'alert("Product Added Successfully");';
echo 'self.location = "../index.php?defprod";';
echo '</script>';

?>