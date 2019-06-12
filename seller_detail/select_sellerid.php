<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$seller_id = $_GET['ID'];
$queryResult = $connect->query("SELECT seller_id, seller_name, seller_class, seller_price, seller_cishu,seller_jdlv,
seller_hplv, seller_zizhi, seller_renzheng, seller_detail, seller_timestamp, seller_modifiytime, seller_admin, seller_tel, seller_add,
seller_shenpiren, seller_guarantee, seller_sub, seller_display, seller_pic1, seller_pic2, seller_pic3, seller_pic4
FROM seller_detail WHERE seller_id = $seller_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
