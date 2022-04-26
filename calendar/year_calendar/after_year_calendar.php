<?php
$days = array("M", "T", "W", "T", "F", "S", "S");
$array = [];
$ths='';
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

for($k = 0; $k < 7; $k++) {
    $ths .= "<th>" . $days[$k] . "</th>";
}
$prev_year = $_POST['year'];
$year = $prev_year + 1;
$p = "";

for($y = 1; $y < 13; $y++) {
    $mounth = $mounths[$y];
    $last_mounth = $y - 1;

    if ( $last_mounth == 0 ) {
        $last_mounth = 12;
    }

    if ($y == 2) {
        $prev_year++;
    }

    $first_day = date('w', strtotime("$mounth $year"));
    $last_day_prew_mounth = cal_days_in_month(CAL_GREGORIAN, $last_mounth, $prev_year);

    if ( $first_day == 0 ) {
        $first_day = 7;
    }

    if($first_day > 2 ) {
        $last_day_prew_mounth -= $first_day - 2;
    }

    $q = 1;
    $f = 1;

    if($y == 1 || $y == 5 || $y == 9) {
        $p .= "<div class='arajin'>";
    }

    $p .= '<div class="nachalo_year">
                <div class="lll" style="width: 90%;">
                    <table class="jjj"> 
                        <div class="kkkkk1">
                            <form action="#cal" method="post"> 
                                <div class="name_mount1">
                                    <button type="submit" class="year_month_names h5" style="outline: none">' . $mounth . '</button>
                                    <button type="submit" class="year_cal_cover h5" style="outline: none">></button>
                                    <input type="hidden" value="mounth" name="choose_calendar">
                                    <input type="hidden" value="' . $mounth . '" name="mounth">
                                    <input type="hidden" value="' . $year . '" name="year">
                                </div>
                            </form>
                        </div>
                        <div class="name_mount">
                            <h5 class="year_month_names">' . $mounth . '</h5>
                                <h5 class="year_cal_cover" >></h5>
                        </div>
                        <thead class="tr">' . $ths . '</thead>';
    $num_of_days = cal_days_in_month(CAL_GREGORIAN, $y, $year);
    // $k=($first_day*1 + $num_of_days*1 - 1) / 7;
    for ($i = 0; $i < 6; $i++) {
        $p .= '<tbody><tr>';
        for ($j = 0; $j < 7; $j++){
            if($i==0){
                if($j >= $first_day-1) {
                    $dates = str_pad($q,2,'0', STR_PAD_LEFT);
                    $p .= "<td class='number_td_pas'>" . $dates . "</td>";
                    $q++;
                }
                else {
                    $p .= "<td class='number_td'>" . $last_day_prew_mounth . "</td>";
                    $last_day_prew_mounth ++;
                }
            }
            else{
                if($q<=$num_of_days) {
                    $dates = str_pad($q,2,'0', STR_PAD_LEFT);
                    $p .= "<td class='number_td_pas'>" . $dates . "</td>";
                }else {
                    $dates1 = str_pad($f,2,'0', STR_PAD_LEFT);
                    $p .= "<td class='number_td'>" . $dates1 . "</td>";
                    $f++;
                }
                $q++;
            }
        }
        $p .="</tr></tbody>";
    }
    $p .= '</table></div></div>';

    if($y == 4 || $y == 8 || $y == 12) {
        $p .= "</div>";
    }
}

$array['year'] = $year;
$array["table"] = $p;

echo json_encode($array)
?>