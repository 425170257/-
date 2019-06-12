<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$water_name = $_GET['NAME'];
$water_tel = $_GET['TEL'];
$water_sub = $_GET['SUB'];
$water_time = $_GET['TIME'];
$sql = "INSERT INTO water_order (water_name, water_tel, water_sub,
water_time)
VALUES ('$water_name', '$water_tel', '$water_sub', '$water_time')";
if ($connect->query($sql) === TRUE) {
$response['result'] = "success";
     echo json_encode($response);
     }else {
       echo "Error:".$sql."<br/>".$connect->error;
     }
mysqli_close($connect);
?>
