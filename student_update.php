<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');

 
    $getId       = $_POST['stu_id'];   
    $getlati   = $_POST['lati'];  
    $getlongti    =$_POST['longti'];   

    $sql = "UPDATE student SET lati = '$getlati',longti = '$getlongti'
            WHERE stu_id = '$getId'";
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