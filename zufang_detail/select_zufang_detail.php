<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$zufang_id = $_GET['ID'];
$queryResult = $connect->query("SELECT zufang_id, zufang_tittle, zufang_userid, zufang_method, zufang_price, zufang_acreage, zufang_class,zufang_housetype,
zufang_time,zufang_timestamp,zufang_browse,zufang_area,zufang_district,zufang_author,zufang_detail,zufang_wechat,
zufang_tal,zufang_valid,zufang_device,zufang_display,
zufang_pic1,zufang_pic2,zufang_pic3,zufang_pic4,zufang_pic5,zufang_sub
   FROM zufang_detail WHERE zufang_id = $zufang_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
$readnumber = $result[0]['zufang_browse'];
$number = (int)$readnumber+1;
$finalnumber = (string)$number;
$connect->query("UPDATE zufang_detail SET zufang_browse = '$finalnumber' WHERE zufang_id = $zufang_id");
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
