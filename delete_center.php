<?php
session_start();
include('db_connection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM centers WHERE id ='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location: recycling_center.php');
    }
}

?>