<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$queryResult = $connect->query("SELECT product_id, pro_shopname, pro_introduction, pro_rate, pro_name, pro_yprice,
   pro_price,pro_detial,pro_validitytime,pro_usetime,pro_appointment,pro_number,pro_remind,pro_service,pro_pic1,pro_pic2,pro_pic3,pro_pic4,pro_pic5
   FROM product_detail");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
