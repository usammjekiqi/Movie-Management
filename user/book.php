<?php
include "../include/db.php"
session_start();

if($_SESSION['riquest_method'] == 'post'){
    $user_id = $_SESSION ["users_id"];
    $muvi_id = $_POST ["muvi_id"];
    $muvi_date= $_POST ["muvi_date"];
    $muvi_time = $_POST ["muvi_time"];

    $sql = "INSERT INTO bokking (users_id, muvi_id, show_date, show_time, )
    VALUE ($user_id, $muvi_id, '$show_date', '$show_time', ) ";
    if($conn->qerry($sql) == TRUE){
        echo = "booking request submit"
    }else{
        echo"error: ". $sql. "<br>"" $conn->error;
    }
}