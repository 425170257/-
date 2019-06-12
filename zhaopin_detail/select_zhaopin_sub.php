<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$page = $_GET['PAGE'];
$zhaopin_address = $_GET['ADD'];
$display = 10; //每页显示10个数 据
$start = ($page-1)*$display;
$queryResult = $connect->query("SELECT zhaopin_id, zhaopin_userid, zhaopin_timestamp, zhaopin_tittle, zhaopin_salary, zhaopin_time, zhaopin_browse,
zhaopin_position, zhaopin_require, zhaopin_welfare, zhaopin_address, zhaopin_detail, zhaopin_company,
zhaopin_class, zhaopin_display, zhaopin_tel, zhaopin_pic1, zhaopin_pic2, zhaopin_pic3, zhaopin_pic4
FROM zhaopin_detail WHERE zhaopin_display = 1 AND zhaopin_address = $zhaopin_address Order By zhaopin_time Desc LIMIT $start,$display");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
$result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
