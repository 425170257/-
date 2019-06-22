<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$page = $_GET['PAGE'];
$usedcar_autobrandid = $_GET['AUTOID'];
$usedcar_class = $_GET['CLASS'];
$usedcar_sub = $_GET['SUB'];
$price1 = $_GET['PRICE1'];
$price2 = $_GET['PRICE2'];
$display = 10; //每页显示10个数 据
$start = ($page-1)*$display;
$queryResult = $connect->query("SELECT usedcar_detail.usedcar_autobrandid, usedcar_detail.usedcar_class, usedcar_detail.usedcar_name,
usedcar_detail.usedcar_detail, usedcar_detail.usedcar_price, usedcar_detail.usedcar_yprice, usedcar_detail.usedcar_amt,
usedcar_detail.usedcar_register, usedcar_detail.usedcar_mileage, usedcar_detail.usedcar_colour, usedcar_detail.usedcar_add,
usedcar_detail.usedcar_author, usedcar_detail.usedcar_tal, usedcar_detail.usedcar_sub, usedcar_detail.usedcar_display, usedcar_detail.usedcar_video,
usedcar_detail.usedcar_pic1, usedcar_detail.usedcar_pic2, usedcar_detail.usedcar_pic3, usedcar_detail.usedcar_pic4, usedcar_detail.usedcar_pic5,
usedcar_detail.usedcar_pic6, usedcar_detail.usedcar_pic7, usedcar_detail.usedcar_pic8, usedcar_detail.usedcar_pic9, usedcar_detail.usedcar_pic10,
autobrand_detail.autobrand_name, autobrand_detail.autobrand_detail, autobrand_detail.autobrand_pic
FROM usedcar_detail LEFT JOIN autobrand_detail  ON (usedcar_autobrandid = autobrand_id) WHERE usedcar_detail.usedcar_display = 1 AND usedcar_detail.usedcar_autobrandid = $usedcar_autobrandid
AND usedcar_detail.usedcar_class = $usedcar_class AND usedcar_detail.usedcar_sub = $usedcar_sub AND usedcar_detail.usedcar_price BETWEEN $price1 AND $price2 Order By usedcar_detail.usedcar_time Desc LIMIT $start,$display");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
$result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
