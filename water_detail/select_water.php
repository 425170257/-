<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$aboct_city_subname = $_GET['SUBNAME'];
$queryResult = $connect->query("SELECT water_id, water_shopname, water_name, water_yprice,
water_price, water_timestamp, water_tel, water_pic1, water_pic2, water_sub
FROM water_detail WHERE zufang_display = 1 AND water_sub = $aboct_city_subname");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
