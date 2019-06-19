<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$page = $_GET['PAGE'];
$zhaopin_address = $_GET['ADD'];
$display = 10; //每页显示10个数 据
$start = ($page-1)*$display;
$queryResult = $connect->query(" SELECT zhaopin_detail.zhaopin_id, zhaopin_detail.zhaopin_userid, zhaopin_detail.zhaopin_timestamp,
zhaopin_detail.zhaopin_tittle, zhaopin_detail.zhaopin_salary, zhaopin_detail.zhaopin_time, zhaopin_detail.zhaopin_browse,
zhaopin_detail.zhaopin_position, zhaopin_detail.zhaopin_require, zhaopin_detail.zhaopin_welfare, zhaopin_detail.zhaopin_address,
zhaopin_detail.zhaopin_detail, zhaopin_detail.zhaopin_company, zhaopin_detail.zhaopin_class, zhaopin_detail.zhaopin_display,
zhaopin_detail.zhaopin_tel, zhaopin_detail.zhaopin_pic1, zhaopin_detail.zhaopin_pic2, zhaopin_detail.zhaopin_pic3, zhaopin_detail.zhaopin_pic4,
user_basic.user_nickname, user_basic.user_URL
FROM zhaopin_detail LEFT JOIN user_basic  ON (zhaopin_userid = user_ID) WHERE zhaopin_detail.zhaopin_display = 1
AND zhaopin_detail.zhaopin_address = $zhaopin_address Order By zhaopin_detail.zhaopin_time Desc LIMIT $start,$display");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
