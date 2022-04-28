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

    <link rel="stylesheet" type="text/css" href="css/week_calendar.css?2">
    <link rel="stylesheet" type="text/css" href="css/year_calendar.css?4">
    <link rel="stylesheet" type="text/css" href="css/mounth_calendar.css">
    <link rel="stylesheet" type="text/css" href="css/relese_checklist_first.css?4">
    <script src="js/relese_checklist_first.js" defer></script>



<body>
<?php require "cookie.php"?>

<section class="hide_div"></section>


<section class="section1 my-5">
    <div class="relese_width">
        <?php require "relese_checklist/relese_checklist_first.php"?>
    </div>
    <div class="calendar_width">
        <?php require "calendar/calendar.php"?>
        
    </div>
</section>

<?php //require "footer.php"?>

</body>