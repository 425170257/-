<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$page = $_GET['PAGE'];
$price1 = $_GET['PRICE1'];
$price2 = $_GET['PRICE2'];
$display = 10; //每页显示10个数 据
$start = ($page-1)*$display;
$queryResult = $connect->query("SELECT usedcar_autobrandid, usedcar_name, usedcar_detail,
usedcar_price, usedcar_yprice, usedcar_class, usedcar_register, usedcar_mileage, usedcar_colour,
usedcar_add, usedcar_author, usedcar_tal, usedcar_sub, usedcar_display, usedcar_video, usedcar_pic1,
usedcar_pic2, usedcar_pic3, usedcar_pic4, usedcar_pic5, usedcar_pic6, usedcar_pic7, usedcar_pic8, usedcar_pic9, usedcar_pic10
FROM usedcar_detail WHERE usedcar_display = 1 AND usedcar_price BETWEEN $price1 AND $price2 Order By usedcar_time Desc LIMIT $start,$display");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
$result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
