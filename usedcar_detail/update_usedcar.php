<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$usedcar_autobrandid = $_GET['AUTOBRANDID'];
$usedcar_name = $_GET['NAME'];
$usedcar_detail = $_GET['DETAIL'];
$usedcar_price = $_GET['PRICE'];
$usedcar_yprice = $_GET['YPRICE'];
$usedcar_class = $_GET['CLASS'];
$usedcar_register = $_GET['REGISTER'];
$usedcar_mileage = $_GET['MILEAGE'];
$usedcar_colour = $_GET['COLOUR'];
$usedcar_add = $_GET['ADD'];
$usedcar_author= $_GET['AUTHOR'];
$usedcar_tal = $_GET['TAL'];
$usedcar_sub = $_GET['SUB'];
$usedcar_display = $_GET['DISPLAY'];
$usedcar_video = $_GET['VIDEO'];
$usedcar_pic1 = $_GET['PIC1'];
$usedcar_pic2 = $_GET['PIC2'];
$usedcar_pic3 = $_GET['PIC3'];
$usedcar_pic4 = $_GET['PIC4'];
$usedcar_pic5 = $_GET['PIC5'];
$usedcar_pic6 = $_GET['PIC6'];
$usedcar_pic7 = $_GET['PIC7'];
$usedcar_pic8 = $_GET['PIC8'];
$usedcar_pic9 = $_GET['PIC9'];
$usedcar_pic10 = $_GET['PIC10'];
$sql= "UPDATE usedcar_detail SET usedcar_autobrandid = '$usedcar_autobrandid', usedcar_name = '$usedcar_name', usedcar_detail = '$usedcar_detail', usedcar_price = '$usedcar_price', usedcar_yprice = '$usedcar_yprice',
usedcar_class = '$usedcar_class', usedcar_register = '$usedcar_register', usedcar_mileage = '$usedcar_mileage',usedcar_colour = '$usedcar_colour', usedcar_add = '$usedcar_add',
usedcar_author = '$usedcar_author', usedcar_tal = '$usedcar_tal', usedcar_sub = '$usedcar_sub', usedcar_display = '$usedcar_display', usedcar_video = '$usedcar_video',
usedcar_pic1 = '$usedcar_pic1', usedcar_pic2 = '$usedcar_pic2', usedcar_pic3 = '$usedcar_pic3', usedcar_pic4 = '$usedcar_pic4', usedcar_pic5 = '$usedcar_pic5', usedcar_pic6 = '$usedcar_pic6',
usedcar_pic7 = '$usedcar_pic7', usedcar_pic8 = '$usedcar_pic8', usedcar_pic9 = '$usedcar_pic9', usedcar_pic10 = '$usedcar_pic10'
WHERE usedcar_id='$usedcar_id'";
if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$connect->error;
}
mysqli_close($connect);
?>
