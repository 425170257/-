<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$jiaoyi_tittle = $_GET['TITTLE'];
$jiaoyi_yprice = $_GET['YPRICE'];
$jiaoyi_price = $_GET['PRICE'];
$jiaoyi_class = $_GET['CLASS'];
$jiaoyi_time = $_GET['TIME'];
$jiaoyi_timestamp = $_GET['TIMESTAMP'];
$jiaoyi_browse = $_GET['BROWSE'];
$jiaoyi_new = $_GET['NEW'];
$jiaoyi_area = $_GET['AREA'];
$jiaoyi_district = $_GET['DISTRICT'];
$jiaoyi_author = $_GET['AUTHOR'];
$jiaoyi_detail = $_GET['DETAIL'];
$jiaoyi_tal = $_GET['TAL'];
$jiaoyi_wechat = $_GET['WECHAT'];
$jiaoyi_valid = $_GET['VALID'];
$jiaoyi_pic1 = $_GET['PIC1'];
$jiaoyi_pic2 = $_GET['PIC2'];
$jiaoyi_pic3 = $_GET['PIC3'];
$jiaoyi_pic4 = $_GET['PIC4'];
$jiaoyi_pic5 = $_GET['PIC5'];
$jiaoyi_pic6 = $_GET['PIC6'];
$jiaoyi_pic7 = $_GET['PIC7'];
$jiaoyi_pic8 = $_GET['PIC8'];
$sql = "INSERT INTO zhuanrang_detail (jiaoyi_tittle, jiaoyi_yprice, jiaoyi_price, jiaoyi_class,
  jiaoyi_time,jiaoyi_timestamp,jiaoyi_browse,jiaoyi_new,jiaoyi_area,jiaoyi_district,jiaoyi_author,jiaoyi_detail,jiaoyi_tal,jiaoyi_wechat,
  jiaoyi_valid,jiaoyi_pic1,jiaoyi_pic2,jiaoyi_pic3,jiaoyi_pic4,jiaoyi_pic5,jiaoyi_pic6,jiaoyi_pic7,jiaoyi_pic8)
VALUES ('$jiaoyi_tittle', '$jiaoyi_yprice', '$jiaoyi_price', '$jiaoyi_class', '$jiaoyi_time','$jiaoyi_timestamp',
   '$jiaoyi_browse','$jiaoyi_new', '$jiaoyi_area', '$jiaoyi_district', '$jiaoyi_author', '$jiaoyi_detail', '$jiaoyi_tal',
   '$jiaoyi_wechat', '$jiaoyi_valid', '$jiaoyi_pic1', '$jiaoyi_pic2', '$jiaoyi_pic3', '$jiaoyi_pic4',
   '$jiaoyi_pic5','$jiaoyi_pic6','$jiaoyi_pic7','$jiaoyi_pic8')";
if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$connect->error;
}
mysqli_close($connect);
?>
