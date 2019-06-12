<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$autobrand_name = $_GET['NAME'];
$autobrand_detail = $_GET['DETAIL'];
$autobrand_pic = $_GET['PIC'];
$autobrand_display = $_GET['DISPLAY'];
$sql = "INSERT INTO autobrand_detail (autobrand_name, autobrand_detail, autobrand_pic, autobrand_display)
VALUES ('$autobrand_name', '$autobrand_detail', '$autobrand_pic', '$autobrand_display')";
if ($connect->query($sql) === TRUE) {
$response['result'] = "success";
     echo json_encode($response);
     }else {
       echo "Error:".$sql."<br/>".$connect->error;
     }
mysqli_close($connect);
?>
