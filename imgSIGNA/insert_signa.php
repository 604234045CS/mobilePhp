<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('../config.ini.php');




$datasig = ['result'=> false];
$target_path1 = time().'.png';


if(isset($_POST['imgsig'])){

    $imagesigna = $_POST['imgsig'];
    $imagesigna = str_replace('data:image/png;base64,','',$imagesigna);
    $imagesigna = str_replace(' ','+',$imagesigna);
    $imagesigna = base64_decode($imagesigna);

    file_put_contents($target_path1, $imagesigna);

}


   
    $imasi = $target_path1;
    $infor_id = $_POST['infor_id'];
    $sql = "insert into imgsigna( imgsig, infor_id)
    values('".$imasi."','".$infor_id."')";
$result = mysqli_query($con, $sql);
    //  echo $sql;
    //  echo $result;
//     if($result){
//         $callback = array(
//         'status' => 200
//         ,'msg' => 'Insert Success'
//         );
//     }else{
//         $callback = array(
//         'status' => 404
//         ,'msg' => 'Insert Fail'
//         );




// echo json_encode($data);
// echo json_encode($datasig);
// echo json_encode($callback);

?>