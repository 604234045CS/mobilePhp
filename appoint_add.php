<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');


    $getDate   = $_POST['date'];  
    $getStu    =$_POST['stu_id'];   
    $getTea  = $_POST['tea_id'];  
    $getY  = $_POST['y_id'];  
    $time  = $_POST['time'];  
 
    // $getDate    = '2563-08-20';   
    // $getStu   = '6002';  
    // $getTea = 't01';  
 
    
    $sql = "INSERT INTO appointment(date, stu_id, tea_id, y_id, time)
                        VALUES ('$getDate', '$getStu', '$getTea', '$getY', '$time')";
    $result = mysqli_query($con, $sql);

   
    if($result){
        $callback = array(
        'status' => 200
        ,'msg' => 'Insert Success'
        );
    }else{
        $callback = array(
        'status' => 404
        ,'msg' => 'Insert Fail'
        );
    }
    echo json_encode($callback);


?>