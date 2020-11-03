<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');


$l_id = $_GET['l_id'];
$y_id = $_GET['y_id'];
$t_id = $_GET['t_id'];
$sql = "SELECT * FROM appointment 
INNER JOIN student ON student.stu_id = appointment.stu_id 
INNER JOIN teacher ON teacher.tea_id = appointment.tea_id 
INNER JOIN guardian ON guardian.gua_id = student.gua_id 
INNER JOIN levels ON levels.level_id = student.level_id 
INNER JOIN inforhome ON inforhome.stu_id = student.stu_id AND inforhome.y_id='$y_id'
WHERE student.level_id='$l_id' AND appointment.y_id='$y_id' AND teacher.tea_id='$t_id'";
$result = mysqli_query($con,$sql);

$arr = array();
while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}
mysqli_close($con);
echo json_encode($arr);

?>