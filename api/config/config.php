<?php
    
$host = "localhost";
$user = "root";
$password = "";
$db_name = "flutter_food_app";

$conn = mysqli_connect($host,$user,$password,$db_name);

if($conn){
    echo "Successfully connected to database\n";
}

?>