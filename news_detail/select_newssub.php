<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$page = $_GET['PAGE'];
$aboct_city_subname = $_GET['SUBNAME'];
$display = 10;
$start = ($page-1)*$display;
$queryResult = $connect->query("SELECT news_id, news_display, news_tittle, news_author,
news_link, news_source,news_posttime,news_timestamp,news_sub, news_class,news_pic
FROM new_detail WHERE news_display = 1 AND news_sub = $aboct_city_subname Order By news_posttime Desc LIMIT $start,$display");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
