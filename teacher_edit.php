<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');



    // include('teacher_read.php');

 
    $getId       = $_POST['tea_id'];   
    $getUsername   = $_POST['username'];  
    $getPassword    =$_POST['password'];   
    $getName    = $_POST['tea_name'];  
    $getLastname = $_POST['tea_lastname'];  
    $getLevel  = $_POST['level_id'];  

    // $getId       = 't07';   
    // $getUsername   = 'ta';  
    // $getPassword    = '045';   
    // $getName    = 'ซารีต้า';  
    // $getLastname = 'สีทอง';  
    // $getLevel  = 'l06';  

    // $sql = "INSERT INTO teacher(tea_id, username, password, tea_name, tea_lastname, level_id)
    // VALUES ('$getId ', '$getUsername', '$getPassword', '$getName', '$getLastname',  '$getLevel')";
    // $result = mysqli_query($con, $sql);

    $sql = "UPDATE teacher SET username = '$getUsername',password = '$getPassword',
            tea_name = '$getName',tea_lastname = '$getLastname',level_id = '$getLevel'
            WHERE tea_id = '$getId'";
    $result = mysqli_query($con,$sql);

    if($result){
        $callback = array(
        'status' => 200
        ,'msg' => 'Update Success'
        );
    }else{
        $callback = array(
        'status' => 404
        ,'msg' => 'Update Fail'
        );
    }
    echo json_encode($callback);


?>