<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$page = $_GET['PAGE'];
$maifang_sub = $_GET['SUB'];
$display = 10; //每页显示10个数据
$start = ($page-1)*$display;
$queryResult = $connect->query("SELECT maifang_id, maifang_tittle, maifang_price,
maifang_acreage, maifang_class,maifang_housetype,maifang_time,maifang_timestamp,
maifang_browse,maifang_area,maifang_district,maifang_author,maifang_detail,maifang_wechat,
maifang_tal,maifang_valid,maifang_fitment,maifang_display,maifang_sub,maifang_pic1,maifang_pic2,
maifang_pic3,maifang_pic4,maifang_pic5,maifang_pic6,maifang_pic7,maifang_pic8,
maifang_pic9,maifang_pic10
   FROM maifang_detail WHERE maifang_display = 1 AND maifang_sub = $maifang_sub Order By maifang_timestamp Desc LIMIT $start,$display");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
