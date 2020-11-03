<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');


$year = $_GET['year'];
$l_id = $_GET['l_id'];
$sql = "SELECT * FROM inforhome 
INNER JOIN student ON student.stu_id = inforhome.stu_id 
INNER JOIN imgsigna ON imgsigna.infor_id = inforhome.infor_id 
INNER JOIN guardian ON student.gua_id = guardian.gua_id 
INNER JOIN levels ON student.level_id = levels.level_id 
 INNER JOIN teacher ON teacher.tea_id = inforhome.tea_id 
 INNER JOIN title ON title.t_id = student.t_id
INNER JOIN year ON year.y_id = inforhome.y_id AND year.y_id='$year' 
WHERE student.level_id = '$l_id'";
$result = mysqli_query($con,$sql);

$arr = array();
while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}
mysqli_close($con);
echo json_encode($arr);

?>