<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');


$year = $_GET['year'];
$l_id = $_GET['l_id'];
$sql = "SELECT inforhome.money,COUNT(inforhome.money) as num FROM inforhome 
        INNER JOIN student ON inforhome.stu_id = student.stu_id 
        INNER JOIN year ON inforhome.y_id = year.y_id WHERE student.level_id = '$l_id' AND inforhome.y_id = '$year'
        GROUP BY inforhome.money,student.level_id";
$result = mysqli_query($con,$sql);

$arr = array();
while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}
mysqli_close($con);
echo json_encode($arr);

?>