<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$usedcar_id = $_GET['ID'];
$queryResult = $connect->query("SELECT usedcar_id FROM usedcar_detail WHERE usedcar_id= $usedcar_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
$id =count($result);
if($id == null){
  $response['including'] = "not existing";
  echo json_encode($response);
}else {
$sql= "DELETE FROM usedcar_detail WHERE usedcar_id='$usedcar_id'";
if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$connect->error;
}
}
mysqli_close($connect);
?>
