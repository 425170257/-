<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$ad_id = $_GET['ID'];
$ad_time = $_GET['TIME'];
$ad_class = $_GET['CLASS'];
$ad_tittle = $_GET['TITTLE'];
$ad_place = $_GET['PLACE'];
$ad_owner = $_GET['OWNER'];
$ad_unname = $_GET['UNNAME'];
$ad_deadline = $_GET['DEADLINE'];
$ad_display = $_GET['DISPLAY'];
$ad_dpquantity = $_GET['DPQUANTITY'];
$ad_clicks = $_GET['CLICKS'];
$ad_pic1 = $_GET['PIC1'];
$ad_link = $_GET['LINK'];
$ad_video = $_GET['VIDEO'];
$ad_weight = $_GET['WEIGHT'];
$ad_sub = $_GET['SUB'];
$ad_position = $_GET['POSITION'];
$sql= "UPDATE ad_detail SET ad_time = '$ad_time', ad_class = '$ad_class', ad_tittle = '$ad_tittle', ad_place = '$ad_place', ad_owner = '$ad_owner',
ad_unname = '$ad_unname', ad_deadline = '$ad_deadline', ad_display = '$ad_display',ad_dpquantity = '$ad_dpquantity', ad_clicks = '$ad_clicks',
ad_pic1 = '$ad_pic1', ad_link = '$ad_link', ad_video = '$ad_video', ad_weight = '$ad_weight', ad_subt = '$ad_sub', ad_position = '$ad_position'
WHERE ad_id='$ad_id'";
if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$connect->error;
}
mysqli_close($connect);
?>
