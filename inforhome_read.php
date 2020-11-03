<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');


$infoid = $_GET['infor_id'];
$sql = "SELECT student.stu_id,student.stu_citizen,student.stu_name,student.stu_lastname,student.level_id,student.address,
student.lati,student.longti,student.gua_id,student.stu_picture,guardian.gua_id,guardian.gua_citizen,
guardian.gua_name, guardian.gua_lastname,guardian.numphone,guardian.status_stu,levels.level_id,levels.level,
inforhome.infor_id,inforhome.member,inforhome.live,inforhome.career,inforhome.relationship,inforhome.income,
inforhome.money,inforhome.health,inforhome.distance,inforhome.goschool,inforhome.residence,inforhome.substance,inforhome.violence,
inforhome.sexual,inforhome.game,inforhome.informant,inforhome.img,
teacher.tea_id,teacher.tea_name,teacher.tea_lastname
FROM student
INNER JOIN guardian ON student.gua_id = guardian.gua_id
INNER JOIN levels ON student.level_id = levels.level_id
INNER JOIN inforhome ON student.stu_id = inforhome.stu_id
INNER JOIN teacher ON teacher.tea_id = inforhome.tea_id
where inforhome.infor_id='$infoid'
";
$result = mysqli_query($con,$sql);

$arr = array();
while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}
mysqli_close($con);
echo json_encode($arr);

?>