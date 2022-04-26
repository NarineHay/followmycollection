<?php
require "config/con1.php";

if(!empty($_POST['action'])){
    $date_id=$_POST['date_id'];
    $sport_id=$_POST['sport_id'];
    $favorite_type=$_POST['favorite_type'];
    $user_id = $_POST['user_id'];

    if($_POST['action'] == 'add') {

        $sql="INSERT INTO `favorite_dates`(`sport_id`, `date_id`, `type`, `user_id`) VALUES ( $sport_id, $date_id, '$favorite_type', $user_id)";
        $result=mysqli_query($con, $sql);

    }

    else if($_POST['action'] == 'delete') {

        $sql="DELETE FROM `favorite_dates` WHERE sport_id = $sport_id AND date_id = $date_id AND type = '$favorite_type' AND user_id = $user_id";
        $result=mysqli_query($con, $sql);

    }

}