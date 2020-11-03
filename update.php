<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$getid = $_POST['tea_id'];
$getusername = $_POST['username'];
$getpassword = $_POST['password'];
$getname = $_POST['tea_name'];
$getlastname = $_POST['tea_lastname'];
$getlevel = $_POST['level_id'];


$sql = "UPDATE teacher set tea_id = '".$_POST["tea_id"]."',
        username = '".$_POST["username"]."',
        password = '".$_POST["password"]."',
        tea_name = '".$_POST["tea_name"]."',
        tea_lastname = '".$_POST["tea_lastname"]."',
        level_id = '".$_POST["level_id"]."'";
$result = mysqli_query($con,$sql);


if($result){
    $callback = array(
        'status' => 200
        'msg' => 'Update Success'
    );
    
}else{
    $callback = array(
        'status' => 404
        'msg' => 'Update Fail'
    );
}
   
echo json_encode($callback);

?>