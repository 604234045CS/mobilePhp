<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');

$appid = $_POST['appoi_id'];
$sql = "SELECT * FROM appointment INNER JOIN student ON appointment.stu_id = student.stu_id 
INNER JOIN teacher ON appointment.tea_id = teacher.tea_id
        where appointment.appoi_id='$appid'";
        // GROUP BY appointment.date
$result = mysqli_query($con,$sql);

$arr = array();
while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}
mysqli_close($con);
echo json_encode($arr);


?>