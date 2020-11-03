<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');




$query = "SELECT * FROM `student`" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
$getdata = json_encode($result);


mysqli_close($con);

?>