<?php

include '../conn.php';
$page = $_GET['PAGE'];
$bbs_subname = $_GET['SUBNAME'];
$bbs_catagoryid = $_GET['CLASS'];
$display = 10; //每页显示10个数据
$start = ($page-1)*$display;
$queryResult = $connect->query("SELECT bbs_id, bbs_tittle, bbs_content, bbs_authorpic, bbs_author,
bbs_readtimes,bbs_commenttimes,bbs_comment,bbs_subname,bbs_catagoryid,bbs_posttime,bbs_timestamp,bbs_top,bbs_location,
bbs_laud,bbs_video,bbs_display,bbs_pic1,bbs_pic2,bbs_pic3,bbs_pic4,bbs_pic5,bbs_pic6,bbs_pic7
FROM city_bbs WHERE bbs_display = 1 AND bbs_catagoryid = $bbs_catagoryid AND bbs_subname = $bbs_subname Order By bbs_posttime Desc LIMIT $start,$display");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>
