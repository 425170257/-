<?php header("content-Type: text/html; charset=utf-8");
include 'conn.php';
mysql_query("set about_city_subname 'utf8'");
$queryResult = $connect->query("SELECT water_id, water_shopname, water_name, water_yprice,
water_price, water_timestamp, water_tel, water_pic1, water_pic2, water_sub
 FROM water_detail ORDER BY about_city_value DESC");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
?>
