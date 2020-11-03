
<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');


    // $appid  = '2'; 
    // $appid  = $_GET['appoi_id']; 
    $appid  = $_POST['appoi_id']; 
    $sql = "delete from appointment where appoi_id=".$appid;
    $result = mysqli_query($con,$sql);

    if($result){
        $callback = array(
        'status' => 200
        ,'msg' => 'Dalate Success'
        );
    }else{
        $callback = array(
        'status' => 404
        ,'msg' => 'Delete Fail'
        );
    }
    echo json_encode($callback);


?>