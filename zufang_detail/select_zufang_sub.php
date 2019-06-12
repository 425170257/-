<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$page = $_GET['PAGE'];
$aboct_city_subname = $_GET['SUBNAME'];
$display = 10; //每页显示10个数据
$start = ($page-1)*$display;
$queryResult = $connect->query("SELECT zufang_id, zufang_tittle, zufang_userid, zufang_method, zufang_price, zufang_acreage, zufang_class,zufang_housetype,
zufang_time,zufang_timestamp,zufang_browse,zufang_area,zufang_district,zufang_author,zufang_detail,zufang_wechat,zufang_tal,zufang_valid,zufang_device,
zufang_pic1,zufang_pic2,zufang_pic3,zufang_pic4,zufang_pic5
   FROM zufang_detail WHERE zufang_display = 1 AND zufang_sub = $aboct_city_subname Order By zufang_timestamp Desc LIMIT $start,$display");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
