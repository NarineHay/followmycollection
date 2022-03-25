<?php
    include "header.php";
    require "config/con1.php";
    if(isset($_COOKIE['user']) || isset($_SESSION['user'])){
        if(!empty($_COOKIE['user'])){
            $user_id=$_COOKIE['user'];
        }
            if(!empty($_SESSION['user'])){
                $user_id=$_SESSION['user'];
            }
    }

?>

    <link rel="stylesheet" type="text/css" href="css/week_calendar.css?1">

    <link rel="stylesheet" type="text/css" href="css/year_calendar.css?1">
    <link rel="stylesheet" type="text/css" href="css/mounth_calendar.css?2">
    <link rel="stylesheet" type="text/css" href="css/relese_checklist_first.css?3">
    
    <script src="js/relese_checklist_first.js?2" defer></script>



<body>
<?php require "cookie.php"?>

<section class="hide_div"></section>


<section class="section1 my-5">
    <div class="calendar_width">
        <?php require "relese_checklist/relese_checklist_first.php"?>
        <?php require "calendar/calendar.php"?>
        
    </div>
</section>

</body>