<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$jiaoyi_id = $_GET['ID'];
echo $jiaoyi_id;
$queryResult = $connect->query("SELECT jiaoyi_browse FROM zhuanrang_detail where jiaoyi_id = $jiaoyi_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;

}
$add =intval($result[0]['jiaoyi_browse'])+1;
$stringadd = strval($add);
$sql = "UPDATE zhuanrang_detail SET jiaoyi_browse = $stringadd WHERE jiaoyi_id = $jiaoyi_id";
$connect->query($sql);
echo json_encode($result,JSON_UNESCAPED_UNICODE);
?>
