<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$queryResult = $connect->query("SELECT autobrand_id, autobrand_name, autobrand_value,
autobrand_detail, autobrand_pic, autobrand_time, autobrand_gtime, autobrand_display
FROM autobrand_detail WHERE autobrand_display = 1  Order By autobrand_value DESC");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
