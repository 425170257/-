<?php header("content-Type: text/html; charset=utf-8");
include '../conn.php';
$bbs_author = $_GET['USERID'];
$bbs_tittle = $_GET['TITTLE'];
$bbs_content = $_GET['CONTENT'];
$bbs_subname = $_GET['SUBNAME'];
$bbs_catagoryid = $_GET['CATAGORYID'];
$bbs_location = $_GET['LOCATION'];
$bbs_pic1 = $_GET['PIC1'];
$bbs_pic2 = $_GET['PIC2'];
$bbs_pic3 = $_GET['PIC3'];
$bbs_pic4 = $_GET['PIC4'];
$bbs_pic5 = $_GET['PIC5'];
$bbs_pic6 = $_GET['PIC6'];
$bbs_pic7 = $_GET['PIC7'];
$sql = "INSERT INTO city_bbs (bbs_author, bbs_tittle, bbs_content, bbs_subname, bbs_catagoryid, bbs_location,
bbs_pic1, bbs_pic2, bbs_pic3, bbs_pic4, bbs_pic5, bbs_pic6, bbs_pic7)
VALUES ($bbs_author, $bbs_tittle, $bbs_content,$bbs_subname,$bbs_catagoryid, $bbs_location, $bbs_pic1, $bbs_pic2,
$bbs_pic3, $bbs_pic4, $bbs_pic5, $bbs_pic6, $bbs_pic7)";
if ($connect->query($sql) === TRUE) {
$response['result'] = "success";
     echo json_encode($response);
     }else {
       echo "Error:".$sql."<br/>".$connect->error;
     }
mysqli_close($connect);
?>
