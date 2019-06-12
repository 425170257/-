<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$bbs_id = $_GET['ID'];
$bbs_tittle = $_GET['TITTLE'];
$bbs_content = $_GET['CONTENT'];
$bbs_video = $_GET['VIDEO'];
$bbs_pic1 = $_GET['PIC1'];
$bbs_pic2 = $_GET['PIC2'];
$bbs_pic3 = $_GET['PIC3'];
$bbs_pic4 = $_GET['PIC4'];
$bbs_pic5 = $_GET['PIC5'];
$bbs_pic6 = $_GET['PIC6'];
$bbs_pic7 = $_GET['PIC7'];
$queryResult = $connect->query("SELECT bbs_id FROM city_bbs WHERE bbs_id= $bbs_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
$id =count($result);
if($id == null){
  $response['including'] = "not existing";
  echo json_encode($response);
}else {
  $sql= "UPDATE city_bbs SET bbs_tittle = '$bbs_tittle', bbs_content = '$bbs_content', bbs_video = '$bbs_video', bbs_pic1 = '$bbs_pic1',
  bbs_pic2 = '$bbs_pic2', bbs_pic3 = '$bbs_pic3', bbs_pic4 = '$bbs_pic4', bbs_pic5 = '$bbs_pic5', bbs_pic6 = '$bbs_pic6', bbs_pic7 = '$bbs_pic7'
  WHERE bbs_id = '$bbs_id'";
if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$connect->error;
}
}
mysqli_close($connect);
?>
