<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$queryResult = $connect->query("SELECT jiaoyi_id, jiaoyi_tittle, jiaoyi_yprice, jiaoyi_price, jiaoyi_class,
  jiaoyi_time,jiaoyi_timestamp,jiaoyi_browse,jiaoyi_new,jiaoyi_area,jiaoyi_area,jiaoyi_author,jiaoyi_detail,jiaoyi_tal,jiaoyi_wechat,
  jiaoyi_valid,jiaoyi_pic1,jiaoyi_pic2,jiaoyi_pic3,jiaoyi_pic4,jiaoyi_pic5,jiaoyi_pic6,jiaoyi_pic7,jiaoyi_pic8
   FROM zhuanrang_detail");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
