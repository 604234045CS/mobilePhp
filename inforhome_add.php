<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');



    
 
    $getId       = $_POST['infor_id'];   
    $getMember   = $_POST['member'];  
    $getLive    =$_POST['live'];   
    $getCareer   = $_POST['career'];  
    $getRelationship = $_POST['relationship'];  
    $getIncome  = $_POST['income'];  
    $getMoney      = $_POST['money'];   
    $getHealth   = $_POST['health'];  
    $getDistance    =$_POST['distance'];   
    $getGoschool   = $_POST['goschool'];  
    $getResidence = $_POST['residence'];  
    $getSubstance  = $_POST['substance'];  
    $getViolence     = $_POST['violence'];   
    $getSexual   = $_POST['sexual'];  
    $getGame    =$_POST['game'];   
    $getInformant  = $_POST['informant'];  
    $getImg = $_POST['img'];  
    $getSigna  = $_POST['signa'];  
 


      
    // $getMember   = '3';  
    // $getLive    = 'มารดา';   
    // $getCareer   = 'เกษตรกรรม';  
    // $getRelationship = 'แยกกันอยู่';  
    // $getIncome  = '9000';  
    // $getMoney      = '60';   
    // $getHealth   = 'มีโรคประจำตัว';  
    // $getDistance    = '3 กิโลเมตร';   
    // $getGoschool   = 'รถรับส่ง';  
    // $getResidence = 'บ้านเช่า';  
    // $getSubstance  = 'ไม่มีการใช้สารเสพติด';  
    // $getViolence     = 'มีความรุนแรง';   
    // $getSexual   = 'มีพฤติกรรมเสี่ยง';  
    // $getGame    = 'ไม่ติดเกมส์';   
    // $getInformant  = 'พี่สาว';  
    // $getImg = 'na.jpg';  
    // $getSigna  = 'na1.jpg'; 


    $sql = "INSERT INTO inforhome(member, live, career, relationship, income, money,  health, 
                        distance, goschool, residence, substance, violence, sexual, game, informant, img, signa)
                        VALUES ('$getMember', '$getLive', '$getCareer', '$getRelationship',  '$getIncome', '$getMoney',
                        '$getHealth', '$getDistance','$getGoschool','$getResidence','$getSubstance','$getViolence','$getSexual',
                        '$getGame','$getInformant','$getImg','$getSigna')";
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