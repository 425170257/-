<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$report_articleid = $_GET['ARTICLEID'];
$report_tittle = $_GET['TITTLE'];
$report_detail = $_GET['DETAIL'];
$report_author = $_GET['AUTHOR'];
$report_informant = $_GET['INFORMANT'];
$report_class = $_GET['CLASS'];
$sql = "INSERT INTO report_form (report_articleid, report_tittle, report_detail,
report_author, report_informant,report_class) VALUES ('$report_articleid', '$report_tittle',
'$report_detail', '$report_author', '$report_informant','$report_class')";

if ($connect->query($sql) === TRUE) {
  $response['result'] = "success";
echo json_encode($response);
}else {
  echo "Error:".$sql."<br/>".$connect->error;
}
mysqli_close($connect);
?>
