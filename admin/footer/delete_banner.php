<?php
    require "../../config/con1.php";

    if(isset($_POST['delete_id'])) {
        $id = $_POST['delete_id'];

        $sql1 = "SELECT image from footer_banner WHERE id=$id";
        $query = mysqli_query($con, $sql1);
        $tox = mysqli_fetch_assoc($query);
        $image = $tox["image"];

        $sql = "DELETE FROM `footer_banner` WHERE id=$id";
        $res = mysqli_query($con, $sql);
        unlink("../Footer_banner/" . $image);
    }
?>