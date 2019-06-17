<?php
include '../conn.php';
$page = $_GET['PAGE'];
$bbs_subname = $_GET['SUBNAME'];
$bbs_catagoryid = $_GET['CLASS'];
$display = 10; //每页显示10个数据
$start = ($page-1)*$display;
$queryResult = $connect->query("SELECT city_bbs.bbs_id, city_bbs.bbs_author, city_bbs.bbs_tittle, city_bbs.bbs_content,
city_bbs.bbs_authorpic, city_bbs.bbs_readtimes,city_bbs.bbs_commenttimes,
city_bbs.bbs_comment,city_bbs.bbs_subname,city_bbs.bbs_catagoryid,city_bbs.bbs_posttime,
city_bbs.bbs_timestamp,city_bbs.bbs_top,city_bbs.bbs_location, city_bbs.bbs_laud,
city_bbs.bbs_video,city_bbs.bbs_display,city_bbs.bbs_pic1,city_bbs.bbs_pic2,city_bbs.bbs_pic3,
city_bbs.bbs_pic4,city_bbs.bbs_pic5,city_bbs.bbs_pic6,city_bbs.bbs_pic7, user_basic.user_ID,
user_basic.user_nickname, user_basic.user_URL, user_basic.user_introduction, user_basic.user_sub,
user_basic.user_sex
FROM city_bbs LEFT JOIN user_basic  ON (bbs_author = user_ID) WHERE city_bbs.bbs_display = 1
AND city_bbs.bbs_catagoryid = $bbs_catagoryid AND city_bbs.bbs_subname = $bbs_subname
Order By city_bbs.bbs_posttime Desc LIMIT $start,$display");
$result = array();
while ( $fetchData = $queryResult -> fetch_assoc()){
    $result [] = $fetchData;
}
echo json_encode($result,JSON_UNESCAPED_UNICODE);
mysqli_close($connect);
?>