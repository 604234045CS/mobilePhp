<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');

     $getid   = $_POST['appoi_id'];  
    $getDate   = $_POST['date'];  
    $getStu    =$_POST['stu_id'];   
    $getTea  = $_POST['tea_id'];  

    // $getid = '10';
    // $getDate    = '2020-09-20';   
    // $getStu   = '5802';  
    // $getTea = 't03';  
 



    $sql = "UPDATE appointment SET date = '$getDate',stu_id = '$getStu',tea_id = '$getTea'
            WHERE appoi_id = '$getid'";
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