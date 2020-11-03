<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');
$tea = $_GET['id'];
$sql = "SELECT * FROM teacher WHERE tea_id = '$tea'";
$result = mysqli_query($con,$sql);

$arr = array();
while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}
mysqli_close($con);
echo json_encode($arr);

?>