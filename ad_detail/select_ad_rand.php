<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$queryResult = $connect->query("SELECT ad_id, ad_time, ad_class, ad_tittle, ad_place, ad_owner, ad_unname,ad_deadline,
ad_display,ad_dpquantity,ad_clicks,ad_pic1,ad_link,ad_video,ad_weight,ad_sub,ad_position
FROM ad_detail WHERE ad_display = 1 ORDER BY rand() limit 1");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
