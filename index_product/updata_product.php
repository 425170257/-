<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$product_id = $_GET['ID'];
$shop_name = $_GET['SHOPNAME'];
$pro_name = $_GET['PRONAME'];
$pro_pic = $_GET['PROPIC'];
$pro_type = $_GET['PROTYPE'];
$pro_price = $_GET['PROPRICE'];
$pro_display = $_GET['DISPLAY'];
$sql= "UPDATE index_product SET shop_name = '$shop_name', pro_name = '$pro_name', pro_pic = '$pro_pic', pro_type = '$pro_type', pro_price = '$pro_price', pro_display = '$pro_display' WHERE product_id='$product_id'";
if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$conn->error;
}
mysqli_close($connect);
?>
