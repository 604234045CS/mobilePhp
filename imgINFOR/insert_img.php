<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('../config.ini.php');


$data = ['result'=> false];
$target_path = time().'.jpg';

// $datasig = ['result'=> false];
// $target_path1 = time().'.png';


if(isset($_POST['img'])){
    
    $imagedata = $_POST['img'];
    $imagedata = str_replace('data:image/jpeg;base64,','',$imagedata);
    $imagedata = str_replace('data:image/jpg;base64,','',$imagedata);
    $imagedata = str_replace(' ','+',$imagedata);
    $imagedata = base64_decode($imagedata);

    file_put_contents($target_path, $imagedata);
}
    // $data['result'] = ture;
    // $data['image_url'] = 'http://10.8.8.12/stu_chanawit/mobileApp/imgINFOR/'.$target_path;
    // echo $target_path;

    // $imagesigna = $_POST['signa'];
    // // $imagesigna = str_replace('data:image/jpeg;base64,','',$imagesigna);
    // // $imagesigna = str_replace('data:image/jpg;base64,','',$imagedata);
    // $imagesigna = str_replace('data:image/png;base64,','',$imagesigna);
    // // $imagesigna = imagecreatefrompng($imagesigna);
    // $imagesigna = str_replace(' ','+',$imagesigna);
    // $imagesigna = base64_decode($imagesigna);

    // file_put_contents($target_path1, $imagesigna);

    // $datasig['result'] = ture;
    // $datasig['image_url'] = 'http://10.8.8.12/stu_chanawit/mobileApp/imgINFOR/'.$target_path1;
    // echo $target_path1;




    $memb = $_POST['member'];
	$live = $_POST['live'];
    $career = $_POST['career'];
	$rela = $_POST['relationship'];
	$inc = $_POST['income'];
    $mon = $_POST['money'];
    $helt = $_POST['health'];
    $dis = $_POST['distance'];
	$go = $_POST['goschool'];
	$resi = $_POST['residence'];
    $subs = $_POST['substance'];
	$vio = $_POST['violence'];
	$sex = $_POST['sexual'];
    $game = $_POST['game'];
    $fomant = $_POST['informant'];
    $imapath = $target_path;
    $date = $_POST['date'];
    $stuid = $_POST['stu_id'];
    $teaid = $_POST['tea_id'];
    $year = $_POST['y_id'];

$sql = "insert into inforhome( member, live, career, relationship, income, money, 	health, 
distance, goschool, residence, substance, violence, sexual, game, informant, img, date, stu_id, tea_id, y_id)
values( '".$memb."', '".$live."','".$career."', '".$rela."', '".$inc."','".$mon."', '".$helt."', '".$dis."', '".$go."',
'".$resi."','".$subs."', '".$vio."', '".$sex."', '".$game."','".$fomant."', '".$imapath."', '".$date."', ".$stuid.", '".$teaid."', '".$year."')";
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