<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$zhaopin_id = $_GET['ID'];
echo $zhaopin_id;
$queryResult = $connect->query("SELECT zhaopin_id, zhaopin_userid, zhaopin_timestamp,
zhaopin_tittle, zhaopin_salary, zhaopin_time, zhaopin_browse, zhaopin_position,
zhaopin_require, zhaopin_welfare, zhaopin_address, zhaopin_detail, zhaopin_company,
zhaopin_class, zhaopin_display, zhaopin_tel, zhaopin_pic1, zhaopin_pic2, zhaopin_pic3, zhaopin_pic4
FROM zhaopin_detail WHERE zhaopin_display = 1 AND zhaopin_id = $zhaopin_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;

}
$add =intval($result[0]['zhaopin_browse'])+1;
$stringadd = strval($add);
$sql = "UPDATE zhaopin_detail SET zhaopin_browse = $stringadd WHERE zhaopin_id = $zhaopin_id";
$connect->query($sql);
echo json_encode($result,JSON_UNESCAPED_UNICODE);
?>
