<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$zhaopin_id = $_GET['ID'];
$zhaopin_tittle = $_GET['TITTLE'];
$zhaopin_salary = $_GET['SALARY'];
$zhaopin_position = $_GET['POSITION'];
$zhaopin_require = $_GET['REQUIRE'];
$zhaopin_welfare = $_GET['WELFARE'];
$zhaopin_address = $_GET['ADDRESS'];
$zhaopin_detail = $_GET['DETAIL'];
$zhaopin_company = $_GET['COMPANY'];
$zhaopin_class = $_GET['CLASS'];
$zhaopin_tel = $_GET['TEL'];
$zhaopin_pic1 = $_GET['PIC1'];
$zhaopin_pic2 = $_GET['PIC2'];
$zhaopin_pic3 = $_GET['PIC3'];
$zhaopin_pic4 = $_GET['PIC4'];
$queryResult = $connect->query("SELECT zhaopin_id FROM zhaopin_detail WHERE zhaopin_id= $zhaopin_id");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
$id =count($result);
if($id == null){
  $response['including'] = "not existing";
  echo json_encode($response);
}else {
$sql= "UPDATE zhaopin_detail SET zhaopin_tittle = '$zhaopin_tittle', zhaopin_salary = '$zhaopin_salary',
zhaopin_position = '$zhaopin_position', zhaopin_require = '$zhaopin_require', zhaopin_welfare = '$zhaopin_welfare',
zhaopin_address = '$zhaopin_address', zhaopin_detail = '$zhaopin_detail', zhaopin_company = '$zhaopin_company',
zhaopin_class = '$zhaopin_class', zhaopin_tel = '$zhaopin_tel', zhaopin_pic1 = '$zhaopin_pic1',
zhaopin_pic2 = '$zhaopin_pic2', zhaopin_pic3 = '$zhaopin_pic3', zhaopin_pic4 = '$zhaopin_pic4',WHERE zhaopin_id='$zhaopin_id'";
if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$connect->error;
}
}
mysqli_close($connect);
?>
