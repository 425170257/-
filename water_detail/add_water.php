<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$water_shopname = $_GET['SHOPNAME'];
$water_name = $_GET['NAME'];
$water_yprice = $_GET['YPRICE'];
$water_price = $_GET['PRICE'];
$water_tel = $_GET['TEL'];
$water_pic1 = $_GET['PIC1'];
$water_pic2 = $_GET['PIC2'];
$water_sub = $_GET['SUB'];
$water_display = $_GET['DISPLAY'];
$sql = "INSERT INTO water_detail (water_shopname, water_name, water_yprice,
water_price, water_tel, water_pic1, water_pic2, water_sub, water_display)
VALUES ('$water_shopname', '$water_name', '$water_yprice', '$water_price',
'$water_tel', '$water_pic1', '$water_pic2', '$water_sub', '$water_display')";
if ($connect->query($sql) === TRUE) {
$response['result'] = "success";
     echo json_encode($response);
     }else {
       echo "Error:".$sql."<br/>".$connect->error;
     }
mysqli_close($connect);
?>
