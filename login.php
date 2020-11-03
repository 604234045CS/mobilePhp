<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$contentdata = file_get_contents("php://input");
$getdata = json_decode($contentdata);

$username = $getdata->username;
$password = $getdata->password;


$sql = "SELECT * FROM teacher WHERE username='$username' AND password= '$password'";
$result = mysqli_query($con,$sql);

$numrow = mysqli_num_rows($result);

if($numrow == 1){
    $arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $arr[] = $row;
    }
    echo json_encode($arr);
    mysqli_close($con);
}else{
    echo json_encode(null);
}

?>