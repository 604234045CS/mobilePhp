<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');


$year = $_GET['year'];
$stu = $_GET['stu_id'];
$sql = "SELECT * FROM inforhome 
INNER JOIN student ON student.stu_id = inforhome.stu_id 
INNER JOIN year ON year.y_id = year.y_id AND year.y_id='$year' 
WHERE student.stu_id='$stu' AND inforhome.y_id='$year'";
$result = mysqli_query($con,$sql);
$arr = array();
while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}
mysqli_close($con);
echo json_encode($arr);

?>