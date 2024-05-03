<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "project_01";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("mysql connect error");
}

?>