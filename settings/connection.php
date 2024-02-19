<?php

//local
$servername= "localhost";
$username="root"; 
$password="ayobalima"; 
$dbname="chores_mgt";

$conn =  new mysqli($servername,$username,$password,$dbname);

//check the connection:
if($conn->connect_error){
    die("Connection Failed : ". $conn->connect_error);
}else{
   echo "connected";
}
?>