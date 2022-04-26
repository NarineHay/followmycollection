<?php
require "config/con1.php";

if(!empty($_POST['date_id'])){
    $date_id=$_POST['date_id'];
    $sport_id=$_POST['sport_id'];
    $favorite_type=$_POST['favorite_type'];
    $sql="INSERT INTO `favorite_dates`(`sport_id`, `date_id`, `type`) VALUES ( $sport_id, $date_id, '$favorite_type')";
    $result=mysqli_query($con, $sql);

    echo $sql;

}