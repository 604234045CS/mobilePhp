<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');

    $getid   = $_POST['infor_id'];  
    $getmem   = $_POST['member'];  
    $getlive   =$_POST['live'];   
    $getcareer  = $_POST['career'];  
    $getrelation   = $_POST['relationship'];  
    $getincome = $_POST['income'];  
    $getmoney   =$_POST['money'];   
    $gethelth  = $_POST['health']; 
    $getdistance  = $_POST['distance'];  
    $getgoschool   = $_POST['goschool'];  
    $getresidence    =$_POST['residence'];   
    $getsub  = $_POST['substance']; 
    $getvio   = $_POST['violence'];  
    $getsex   = $_POST['sexual'];  
    $getgame    =$_POST['game'];   
    $getinfor  = $_POST['informant']; 
    $getimg   = $_POST['img'];  
    // $getsig    =$_POST['signa'];   
    $getstu  = $_POST['stu_id']; 
    $getTea  = $_POST['tea_id']; 

    // $getid = '10';
    // $getDate    = '2020-09-20';   
    // $getStu   = '5802';  
    // $getTea = 't03';  
 



    $sql = "UPDATE inforhome SET member = '$getmem',live = '$getlive',career = '$getcareer',relationship = '$getrelation',income = '$getincome',
                    money = '$getmoney',health = '$gethelth',distance = '$getdistance',goschool = '$getgoschool',residence = '$getresidence',
                    substance = '$getsub',violence = '$getvio',sexual = '$getsex',game = '$getgame',informant = '$getinfor',
                    img = '$getimg',stu_id = '$getstu',tea_id = '$getTea'
            WHERE infor_id = '$getid'";
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