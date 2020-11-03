
<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');


$sqlQuery = " SELECT * FROM student where stu_id LIKE '%or%'
				OR stu_citizen LIKE '%or%'
			";
$result = mysqli_query($con,$sqlQuery);
//Search guardian Data
// if(!empty($_POST["search"]["value"])){
// 	$sqlQuery .= 'where stu_id LIKE "%'.$_POST["search"]["value"].'%" ';
// 	$sqlQuery .= ' OR stu_citizen LIKE "%'.$_POST["search"]["value"].'%" ';			
// 	$sqlQuery .= ' OR stu_name LIKE "%'.$_POST["search"]["value"].'%" ';
// 	$sqlQuery .= ' OR stu_lastname LIKE "%'.$_POST["search"]["value"].'%" ';		
//     $sqlQuery .= ' OR level_id LIKE "%'.$_POST["search"]["value"].'%" ';
//     $sqlQuery .= ' OR address LIKE "%'.$_POST["search"]["value"].'%" ';
//     $sqlQuery .= ' OR lati LIKE "%'.$_POST["search"]["value"].'%" ';
// 	$sqlQuery .= ' OR longti LIKE "%'.$_POST["search"]["value"].'%" ';		
//     $sqlQuery .= ' OR gua_id LIKE "%'.$_POST["search"]["value"].'%" ';
//     $sqlQuery .= ' OR stu_picture LIKE "%'.$_POST["search"]["value"].'%" ';				
// }
// if(!empty($_POST["order"])){
// 	$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
// } else {
// 	$sqlQuery .= 'ORDER BY stu_id';
// }



mysqli_close($con);




?>