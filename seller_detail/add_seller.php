<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$seller_name = $_GET['NAME'];
$seller_class = $_GET['CLASS'];
$seller_price = $_GET['PRICE'];
$seller_cishu = $_GET['CISHU'];
$seller_jdlv = $_GET['JDLV'];
$seller_hplv = $_GET['HPLV'];
$seller_zizhi = $_GET['ZIZHI'];
$seller_renzheng = $_GET['RENZHENG'];
$seller_detail = $_GET['DETAIL'];
$seller_admin = $_GET['ADMIN'];
$seller_tel = $_GET['TEL'];
$seller_add = $_GET['ADD'];
$seller_shenpiren = $_GET['SHENPIREN'];
$seller_guarantee = $_GET['GUARANTEE'];
$seller_sub = $_GET['SUB'];
$seller_display = $_GET['DISPLAY'];
$seller_pic1 = $_GET['PIC1'];
$seller_pic2 = $_GET['PIC2'];
$seller_pic3 = $_GET['PIC3'];
$seller_pic4 = $_GET['PIC4'];
$sql = "INSERT INTO seller_detail (seller_name, seller_class, seller_price, seller_cishu,seller_jdlv,
seller_hplv,seller_zizhi,seller_renzheng,seller_detail,seller_admin,seller_tel,seller_add,seller_shenpiren,
seller_guarantee,seller_sub,seller_display,seller_pic1,seller_pic2,seller_pic3,seller_pic4)
VALUES ('$seller_name', '$seller_class', '$seller_price', '$seller_cishu', '$seller_jdlv','$seller_hplv',
'$seller_zizhi', '$seller_renzheng', '$seller_detail', '$seller_admin', '$seller_tel', '$seller_add',
'$seller_shenpiren', '$seller_guarantee', '$seller_sub', '$seller_display', '$seller_pic1', '$seller_pic2', '$seller_pic3', '$seller_pic4')";
if ($connect->query($sql) === TRUE) {
$response['result'] = "success";
     echo json_encode($response);
     }else {
       echo "Error:".$sql."<br/>".$connect->error;
     }
mysqli_close($connect);
?>
