<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$page = $_GET['PAGE'];
$display = 10; //每页显示10个数据
$start = ($page-1)*$display;
$queryResult = $connect->query("SELECT seller_id, seller_name, seller_class, seller_price, seller_cishu,seller_jdlv,
seller_hplv, seller_zizhi, seller_renzheng, seller_detail, seller_timestamp, seller_modifiytime, seller_admin, seller_tel, seller_add,
seller_shenpiren, seller_guarantee, seller_sub, seller_display, seller_pic1, seller_pic2, seller_pic3, seller_pic4
FROM seller_detail WHERE seller_display = 1  Order By seller_timestamp Desc LIMIT $start,$display");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
