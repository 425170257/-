<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$maifang_tittle = $_GET['TITTLE'];
$maifang_userid = $_GET['USERID'];
$maifang_price = $_GET['PRICE'];
$maifang_acreage = $_GET['ACREAGE'];
$maifang_class = $_GET['CLASS'];
$maifang_housetype = $_GET['HOUSETYPE'];
$maifang_time = $_GET['TIME'];
$maifang_browse = $_GET['BROWSE'];
$maifang_area = $_GET['AREA'];
$maifang_district = $_GET['DISTRICT'];
$maifang_author = $_GET['AUTHOR'];
$maifang_detail = $_GET['DETAIL'];
$maifang_wechat = $_GET['WECHAT'];
$maifang_tal = $_GET['TAL'];
$maifang_valid = $_GET['VALID'];
$maifang_fitment = $_GET['FITMENT'];
$maifang_display = $_GET['DISPLAY'];
$maifang_sub = $_GET['SUB'];
$maifang_pic1 = $_GET['PIC1'];
$maifang_pic2 = $_GET['PIC2'];
$maifang_pic3 = $_GET['PIC3'];
$maifang_pic4 = $_GET['PIC4'];
$maifang_pic5 = $_GET['PIC5'];
$maifang_pic6 = $_GET['PIC6'];
$maifang_pic7 = $_GET['PIC7'];
$maifang_pic8 = $_GET['PIC8'];
$maifang_pic9 = $_GET['PIC9'];
$maifang_pic10 = $_GET['PIC10'];
$sql = "INSERT INTO maifang_detail (maifang_tittle, maifang_userid, maifang_price, maifang_acreage, maifang_class,maifang_housetype,
maifang_time,maifang_browse,maifang_area,maifang_district,maifang_author,maifang_detail,maifang_wechat,
maifang_tal,maifang_valid,maifang_fitment,maifang_display,maifang_sub,maifang_pic1,maifang_pic2,maifang_pic3,maifang_pic4,
maifang_pic5,maifang_pic6,maifang_pic7,maifang_pic8,maifang_pic9,maifang_pic10)
VALUES ('$maifang_tittle', '$maifang_userid', '$maifang_price', '$maifang_acreage', '$maifang_class', '$maifang_housetype', '$maifang_time',
'$maifang_browse','$maifang_area', '$maifang_district', '$maifang_author', '$maifang_detail', '$maifang_wechat','$maifang_tal', '$maifang_valid',
'$maifang_fitment', '$maifang_display', '$maifang_sub', '$maifang_pic1', '$maifang_pic2', '$maifang_pic3', '$maifang_pic4', '$maifang_pic5',
'$maifang_pic6', '$maifang_pic7', '$maifang_pic8', '$maifang_pic9', '$maifang_pic10')";
if ($connect->query($sql) === TRUE) {
$response['result'] = "success";
     echo json_encode($response);
     }else {
       echo "Error:".$sql."<br/>".$connect->error;
     }
mysqli_close($connect);
?>
