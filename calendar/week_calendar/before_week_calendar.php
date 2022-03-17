<?php
$last_day_of_week = $_POST["last_day_of_week"]-8;
$this_mounth = $_POST["this_mounth"];
$this_year = $_POST["this_year"];
$this_thursday_day = $_POST["this_thursday_day"];
$days = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
$ccc = 0;

$this_thursday_day -= 7;

$week_array = [];

$mounths = array(
    1 => "January",
    2 => "February",
    3 => "March",
    4 => "April",
    5 => "May",
    6 => "June",
    7 => "Juny",
    8 => "August",
    9 => "September",
    10 => "October",
    11 => "November",
    12 => "December"
);

if($this_mounth == 0) {
    $this_mounth = 12;
    $this_year--;
}

$prev_mounth = $this_mounth-1;
$prev_year = $this_year;


if($prev_mounth == 0) {
    $prev_mounth = 12;
    $prev_year--;
}

$num_of_days = cal_days_in_month(CAL_GREGORIAN, $prev_mounth, $this_year);

$last_day_prev_mounth = date('w', strtotime($prev_year . "-" . $prev_mounth . "-" . $num_of_days));

if($this_thursday_day < 1) {
    $this_mounth --;
    $this_thursday_day = $num_of_days;
}


for($i = 0; $i < 7; $i++) {

    if($i == 4) {
        $this_thursday_day = $last_day_of_week;
    }


    if($this_thursday_day < 1) {
        $this_mounth --;
    }

    $last_day_of_week ++;

    if($last_day_of_week < 1 ) {
        $last_day_of_week = $num_of_days;
    }

    if($last_day_prev_mounth > 1 && $last_day_of_week == $num_of_days && $ccc == 0) {
        $last_day_of_week -= $last_day_prev_mounth-1;
        $ccc = 1;
    }

    if($last_day_of_week > $num_of_days) {
        $last_day_of_week = 1;
    }

    $last_day_of_week = str_pad($last_day_of_week,2,'0', STR_PAD_LEFT);

    $table1 .= "<th class='days' data-day='" . $last_day_of_week . "'>
                    <span>" . $last_day_of_week . "</span>
                    <span>" . $days[$i] . "</span>
                </th>";

    if($i < 6) {
        $class = "border";
    }else {
        $class = "";
    }

    $trs1 .= "<td class='" . $class . "'>
                       <div style='background: red' class='releses'>
                            <img src=''>
                       </div>
                  </td>";
}

$week_array["week_days"] = $table1;
$week_array["week_mounth"] = $mounths[$this_mounth];
$week_array["week_mounth_number"] = $this_mounth;
$week_array["this_thursday_day"] = $this_thursday_day;
$week_array["week_year"] = $this_year;
$week_array["ppp"] = $last_day_prev_mounth . " / " . $num_of_days ;

echo json_encode($week_array);

?>