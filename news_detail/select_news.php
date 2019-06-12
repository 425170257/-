<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$queryResult = $connect->query("SELECT news_id, news_display, news_tittle, news_author,
news_link, news_source,news_posttime,news_timestamp,news_sub, news_class,news_pic
FROM news_detail WHERE  news_display = 1 Order By news_posttime");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
