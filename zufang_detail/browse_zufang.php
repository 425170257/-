<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$zufang_id = $_GET['ID'];
echo $zufang_id;
$queryResult = $connect->query("SELECT zufang_browse FROM zufang_detail where zufang_id = $zufang_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;

}
$add =intval($result[0]['zufang_browse'])+1;
$stringadd = strval($add);
$sql = "UPDATE zufang_detail SET zufang_browse = $stringadd WHERE zufang_id = $zufang_id";
$connect->query($sql);
echo json_encode($result,JSON_UNESCAPED_UNICODE);
?>
