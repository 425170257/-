<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$goods_id = $_GET['ID'];
$queryResult = $connect->query("SELECT goods_id, goods_sellerid, goods_name,
goods_time, goods_timeg, goods_tittle, goods_price,goods_pic1, goods_pic2,
goods_pic3, goods_pic4, goods_pic5, goods_nprice, goods_cishu, goods_rate,
goods_hplv, goods_renzheng, goods_detail, goods_xuzhi, goods_timestamp,
goods_modifiytime, goods_admin, goods_tel, goods_add, goods_shenpiren, goods_display
FROM goods_detail WHERE goods_id = $goods_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
