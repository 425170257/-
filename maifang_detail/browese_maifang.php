<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$maifang_id = $_GET['ID'];
echo $maifang_id;
$queryResult = $connect->query("SELECT maifang_browse FROM maifang_detail where maifang_id = $maifang_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;

}
$add =intval($result[0]['maifang_browse'])+1;
$stringadd = strval($add);
$sql = "UPDATE maifang_detail SET maifang_browse = $stringadd WHERE maifang_id = $maifang_id";
$connect->query($sql);
echo json_encode($result,JSON_UNESCAPED_UNICODE);
?>
