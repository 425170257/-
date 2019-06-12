<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$ad_id = $_GET['ID'];
$queryResult = $connect->query("SELECT ad_id FROM ad_detail WHERE ad_id= $ad_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
$id =count($result);
if($id == null){
  $response['including'] = "not existing";
  echo json_encode($response);
}else {
$sql= "DELETE FROM ad_detail WHERE ad_id='$ad_id'";
if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$connect->error;
}
}
mysqli_close($connect);
?>
