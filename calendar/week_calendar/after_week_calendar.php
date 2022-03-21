<?php
$last_day_of_week = $_POST["last_day_of_week"];
$this_mounth = $_POST["this_mounth"];
$this_year = $_POST["this_year"];
$this_thursday_day = $_POST["this_thursday_day"];
$days = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
$num_of_days = cal_days_in_month(CAL_GREGORIAN, $this_mounth, $this_year);

$this_thursday_day += 7;

if($this_thursday_day > $num_of_days) {
    $this_mounth ++;
    $this_thursday_day = 1;
}

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

if($this_mounth == 13) {
    $this_mounth = 1;
    $this_year++;
}

for($i = 0; $i < 7; $i++) {

    if($i == 4) {
        $this_thursday_day = $last_day_of_week;
    }

    if($this_thursday_day > $num_of_days) {
        $this_mounth ++;
    }

    $from_date = date("Y/m/d", strtotime("$last_day_of_week $this_mounth $this_year"));
    $to_date = date("Y/m/d", strtotime("+1 Week - 1 DAY", strtotime($from_date)));

    $select_date = "SELECT DAY(collections.release_date) as dd1, collections.sport_type, sports_type.sport_logo, sports_type.background FROM collections, sports_type where collections.sport_type = sports_type.sport_logo AND release_date BETWEEN  '$from_date' AND '$to_date'";
    $date_query = mysqli_query($con, $select_date);
    $count_p = mysqli_num_rows($date_query);
    while($date_row = mysqli_fetch_assoc($date_query)) {
        $k1 = str_pad($date_row['dd1'],2,'0', STR_PAD_LEFT);
        if($k1 == $last_day_of_week) {
            $divs .= "<div style='background: " . $date_row['background'] . "' class='releses'>
                            <img src=''>
                        </div>";
        }
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

    $trs .= "<td class='" . $class . "'>
                       " . $divs . "
            </td>";
    $last_day_of_week ++;
}

$week_array["week_days"] = $table1;
$week_array["week_mounth"] = $mounths[$this_mounth];
$week_array["week_mounth_number"] = $this_mounth;
$week_array["this_thursday_day"] = $this_thursday_day;
$week_array["week_year"] = $this_year;

echo json_encode($week_array);

?>