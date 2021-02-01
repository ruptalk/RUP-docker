<?php
header('Content-Type: application/json');
$conn=mysqli_connect("db","HYP","HYP180923!","RUP");

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$_name=$_POST["_name"];
$_id=$_POST["_id"];
$_pw=$_POST["_pw"];
$_point=$_POST["_point"];
$_phone=$_POST["_phone"];

$sql = "INSERT INTO rup_user (_num, _name, _id, _pw, _point, _phone) VALUES (null,";
$sql = $sql . "'" . $_name . "',"; 
$sql = $sql . "'" . $_id . "',";
$sql = $sql . "'" . $_pw . "',";
$sql = $sql . "'" . $_point . "',";
$sql = $sql . "'" . $_phone . "');";

$response=array();

if(mysqli_query($conn,$sql)){
   $response["success"]="true";
}
else{
   $response["success"]="false";
}

mysqli_close($conn);
?>
