<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$product_id = $_GET['ID'];
$queryResult = $connect->query("SELECT product_id FROM index_product WHERE product_id= $product_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
//下方的命令为计算这个数组
$id =count($result);
//下方命令是判断这个数组是否存在，如果不存在了就输出不存在，如果存在了就能够删除了
if($id == null){
  $response['including'] = "not existing";
  echo json_encode($response);
}else {
$sql= "DELETE FROM index_product WHERE product_id='$product_id'";
if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$connect->error;
}
}
mysqli_close($connect);
?>
