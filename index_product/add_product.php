<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$product_shopname = $_GET['SHOPNAME'];
$product_name = $_GET['NAME'];
$product_yprice = $_GET['YPRICE'];
$product_price = $_GET['PRICE'];
$product_detail = $_GET['DETAIL'];
$product_score = $_GET['SCORE'];
$product_service = $_GET['SERVICE'];
$product_valid = $_GET['VALID'];
$product_time = $_GET['TIME'];
$product_number = $_GET['NUMBER'];
$product_bespeak = $_GET['BESPEAK'];
$product_remind = $_GET['REMIND'];
$product_display = $_GET['DISPLAY'];
$product_pic1 = $_GET['PIC1'];
$sql = "INSERT INTO index_product (product_shopname, product_name, product_yprice,
  product_price, product_detail, product_score,
 product_service, product_valid, product_time, product_number, product_bespeak,
 product_remind, product_display, product_pic1)
VALUES ('$product_shopname', '$product_name', '$product_yprice', '$product_price',
   '$product_detail', '$product_score', '$product_service',
  '$product_valid', '$product_time', '$product_number', '$product_bespeak',
  '$product_remind', '$product_display', '$product_pic1')";

if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$connect->error;
}
mysqli_close($connect);
?>
