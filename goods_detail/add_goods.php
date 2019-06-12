<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$goods_sellerid = $_GET['SELLERID'];
$goods_name = $_GET['NAME'];
$goods_time = $_GET['TIME'];
$goods_timeg = $_GET['TIMEG'];
$goods_tittle = $_GET['TITTLE'];
$goods_price = $_GET['PRICE'];
$goods_pic1 = $_GET['PIC1'];
$goods_pic2 = $_GET['PIC2'];
$goods_pic3 = $_GET['PIC3'];
$goods_pic4 = $_GET['PIC4'];
$goods_pic5 = $_GET['PIC5'];
$goods_nprice = $_GET['NPRICE'];
$goods_cishu = $_GET['CISHU'];
$goods_rate = $_GET['RATE'];
$goods_hplv = $_GET['HPLV'];
$goods_renzheng = $_GET['RENZHENG'];
$goods_detail = $_GET['DETAIL'];
$goods_xuzhi = $_GET['XUZHI'];
$goods_admin = $_GET['ADMIN'];
$goods_tel = $_GET['TEL'];
$goods_add = $_GET['ADD'];
$goods_shenpiren = $_GET['SHENPIREN'];
$goods_display = $_GET['DISPLAY'];
$sql = "INSERT INTO goods_detail (goods_sellerid,goods_name,goods_time,goods_timeg,
goods_tittle,goods_price,goods_pic1,goods_pic2,goods_pic3,goods_pic4,goods_pic5,
goods_nprice,goods_cishu,goods_rate,goods_hplv,goods_renzheng,goods_detail,
goods_xuzhi,goods_admin,goods_tel,goods_add,goods_shenpiren,goods_display)
VALUES ('$goods_sellerid','$goods_name','$goods_time','$goods_timeg','$goods_tittle','$goods_price',
'$goods_pic1','$goods_pic2','$goods_pic3','$goods_pic4','$goods_pic5','$goods_nprice',
'$goods_cishu','$goods_rate','$goods_hplv','$goods_renzheng','$goods_detail','$goods_xuzhi',
'$goods_admin','$goods_tel','$goods_add','$goods_shenpiren','$goods_display')";
if ($connect->query($sql) === TRUE) {
$response['result'] = "success";
     echo json_encode($response);
     }else {
       echo "Error:".$sql."<br/>".$connect->error;
     }
mysqli_close($connect);
?>
