<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$queryResult = $connect->query("SELECT shop_name, pro_name, pro_pic, pro_type, pro_price, pro_display
   FROM index_product");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
