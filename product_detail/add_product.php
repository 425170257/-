<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$pro_shopname = $_GET['SHOPNAME'];
$pro_introduction = $_GET['INTRODUCTION'];
$pro_rate = $_GET['RATE'];
$pro_name = $_GET['NAME'];
$pro_yprice = $_GET['YPRICE'];
$pro_price = $_GET['PRICE'];
$pro_detial = $_GET['DETIAL'];
$pro_validitytime = $_GET['VALIDITYTIME'];
$pro_usetime = $_GET['USETIME'];
$pro_appointment = $_GET['APPOINTMENT'];
$pro_number = $_GET['NUMBER'];
$pro_remind = $_GET['REMIND'];
$pro_service = $_GET['SERVICE'];
$pro_pic1 = $_GET['PIC1'];
$pro_pic2 = $_GET['PIC2'];
$pro_pic3 = $_GET['PIC3'];
$pro_pic4 = $_GET['PIC4'];
$pro_pic5 = $_GET['PIC5'];
$sql = "INSERT INTO product_detail (pro_shopname, pro_introduction, pro_rate, pro_name, pro_yprice,
   pro_price,pro_detial,pro_validitytime,pro_usetime,pro_appointment,pro_number,pro_remind,pro_service,pro_pic1,pro_pic2,pro_pic3,pro_pic4,pro_pic5)
VALUES ('$pro_shopname', '$pro_introduction', '$pro_rate', '$pro_name', '$pro_yprice', '$pro_price','$pro_detial', '$pro_validitytime', '$pro_usetime',
    '$pro_appointment', '$pro_number', '$pro_remind', '$pro_service', '$pro_pic1', '$pro_pic2', '$pro_pic3', '$pro_pic4','$pro_pic5')";
if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  // echo "Error:".$sql."<br/>".$connect->error;
}
mysqli_close($connect);
?>
