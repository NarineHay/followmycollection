<?php
    $select_colors = "SELECT * FROM sports_type";
    $colors_result = mysqli_query($con, $select_colors);
    $colors_content = "";
    $mounth_number = date('n');

    while($tox = mysqli_fetch_assoc($colors_result)) {
        $colors_content .= '<div class="sport_colors">
                                <div class="sport_background" style="background: ' . $tox["background"] . '; color: ' . $tox["color"] . '">' . $tox['sport_type'] . '</div>
                                  
                                <div class="sport_color" style="background: ' . $tox["color"] . '"></div>
                            </div>';
    }
    $this_thursday = date('F', strtotime("thursday this week"));
    $this_thursday_day = date('d', strtotime("thursday this week"));
    $this_mounth = date('F');
    $this_year = date('Y');
    $today = date("d");

?>


<div class="father">

<div class="all_mounths">
  
</div>

<div class="add">
        <p class="bdd">JANUARY 2022</p>
        <p></p>
</div>

<div class="add-f">
        <p class="bdd">JANUARY 2022</p>
        <p></p>
</div>

</div>

<p></p>

<div class="left">
    <div class="mounth_year"> <?= $this_mounth ?> <?= $this_year ?> 
                    <i class="fas fa-angle-left before_week ml-4"></i>
                    <i class="fas fa-angle-right after_week"></i></div>
    <div class="left_calendar">
        <table class="select_calendar">
            <thead>
                <tr>
                    <th>M</th>
                    <th>T</th>
                    <th>W</th>
                    <th>T</th>
                    <th>F</th>
                    <th>S</th>
                    <th>S</th>
                </tr>
            </thead>
            <tbody>
                <?php require "select_calendar.php" ?>
            </tbody>
        </table>
    </div>
    <div class="sport_content">
        <?= $colors_content ?>
    </div>
</div>
<div class="right">
    <div class="right_header">
        <div class="data_content">
            <div class="today">
                <span>TODAY</span>
                <span><?= $today ?></span>
            </div>
            <div class="control">
                <i class="fas fa-angle-left before_week"></i>
                <i class="fas fa-angle-right after_week"></i>
            </div>
            <div class="data">
                <input type="hidden" class="this_thursday_day" value="<?= $this_thursday_day ?>">
                <span class="mounth" data-mounth="<?= $mounth_number ?>"><?= $this_thursday ?></span>
                <span class="year"><?= $this_year ?></span>
            </div>
        </div>
        <div class="search_content">
            <div class="search_panel">
                <input type="text" class="search" placeholder="Search">
                <button><i class="fa fa-search"></i></button>
            </div>
            <select class="calendar_type">
                <option value="week">Week</option>
                <option value="mounth">Mounth</option>
                <option value="year">Year</option>
            </select>
        </div>
    </div>
    
    
   
    <div class="right_calendar">

        <?php 
        require "week_calendar/week_calendar.php" 
        //require "year_calendar/year_calendar.php" 
        //require "mounth_calendar/mounth_calendar.php" 
        
        
        ?> 
     

    </div>


    <script src="js/week_calendar.js"></script>


</div>
