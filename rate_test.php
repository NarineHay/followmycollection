<?php
require "config/con1.php";
$message_res="";

if(!empty($_POST['id'])){
    $id=$_POST['id'];
    $checked = $_POST['checked'];
    if($checked == 'true')
    {
        $sql="UPDATE dates SET `status` = 0 WHERE id=".$id;
    }else{
        $sql="UPDATE dates SET `status` = 1 WHERE id=".$id;
    }
    $result=mysqli_query($con, $sql);

    return $checked;
}