<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$zufang_id = $_GET['ID'];
$zufang_tittle = $_GET['TITTLE'];
$zufang_userid = $_GET['USERID'];
$zufang_method = $_GET['METHOD'];
$zufang_price = $_GET['PRICE'];
$zufang_acreage = $_GET['ACREAGE'];
$zufang_class = $_GET['CLASS'];
$zufang_housetype = $_GET['HOUSETYPE'];
$zufang_time = $_GET['TIME'];
$zufang_timestamp = $_GET['TIMESTAMP'];
$zufang_browse = $_GET['BROWSE'];
$zufang_area = $_GET['AREA'];
$zufang_district = $_GET['DISTRICT'];
$zufang_author = $_GET['AUTHOR'];
$zufang_detail = $_GET['DETAIL'];
$zufang_wechat = $_GET['WECHAT'];
$zufang_tal = $_GET['TAL'];
$zufang_valid = $_GET['VALID'];
$zufang_device = $_GET['DEVICE'];
$zufang_pic1 = $_GET['PIC1'];
$zufang_pic2 = $_GET['PIC2'];
$zufang_pic3 = $_GET['PIC3'];
$zufang_pic4 = $_GET['PIC4'];
$zufang_pic5 = $_GET['PIC5'];
$sql= "UPDATE zufang_detail SET zufang_tittle = '$zufang_tittle', zufang_userid = '$zufang_userid', zufang_method = '$zufang_method', zufang_price = '$zufang_price', zufang_acreage = '$zufang_acreage',
zufang_class = '$zufang_class', zufang_housetype = '$zufang_housetype', zufang_time = '$zufang_time',zufang_timestamp = '$zufang_timestamp', zufang_browse = '$zufang_browse',
zufang_area = '$zufang_area', zufang_district = '$zufang_district', zufang_author = '$zufang_author', zufang_detail = '$zufang_detail', zufang_wechat = '$zufang_wechat', zufang_tal = '$zufang_tal', zufang_wechat = '$zufang_wechat',
zufang_valid = '$zufang_valid', zufang_pic1 = '$zufang_pic1', zufang_pic2 = '$zufang_pic2', zufang_pic3 = '$zufang_pic3', zufang_pic4 = '$zufang_pic4',
zufang_pic5 = '$zufang_pic5'WHERE zufang_id='$zufang_id'";
if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$connect->error;
}
mysqli_close($connect);
?>
