
<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');


$l_id = $_GET['l_id'];
$y_id = $_GET['y_id'];
$sql = "SELECT * , CURDATE() as 'date' FROM student 
INNER JOIN guardian ON student.gua_id = guardian.gua_id 
INNER JOIN levels ON student.level_id = levels.level_id 
INNER JOIN title ON title.t_id = student.t_id 
WHERE student.level_id='$l_id' AND student.stu_id NOT IN(SELECT stu_id FROM appointment WHERE y_id='$y_id')";
$result = mysqli_query($con,$sql);

$arr = array();
while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}
mysqli_close($con);
echo json_encode($arr);

?>