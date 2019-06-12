<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$maifang_id = $_GET['ID'];
$queryResult = $connect->query("SELECT maifang_id, maifang_tittle, maifang_price,
maifang_acreage, maifang_class,maifang_housetype,maifang_time,maifang_timestamp,
maifang_browse,maifang_area,maifang_district,maifang_author,maifang_detail,maifang_wechat,
maifang_tal,maifang_valid,maifang_fitment,maifang_display,maifang_sub,maifang_pic1,maifang_pic2,
maifang_pic3,maifang_pic4,maifang_pic5,maifang_pic6,maifang_pic7,maifang_pic8,
maifang_pic9,maifang_pic10
   FROM maifang_detail WHERE maifang_id = $maifang_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
