<?php
$mounth = $_POST['mounth'];
$year = $_POST['year'];
$year1 = $year;

$array = [];

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

$mounth++;
$last_mounth = $mounth - 1;

if($mounth == 13) {
    $mounth = 1;
    $year++;
}

if($last_mounth == 13) {
    $last_mounth = 1;
    $year1 ++;
}

$select_mounth = $mounths[$mounth];

$first_day = date('w', strtotime("$select_mounth $year"));

if($first_day == 0 ) {
    $first_day = 7;
}

$last_day_prew_mounth = cal_days_in_month(CAL_GREGORIAN, $last_mounth, $year1);

if($first_day > 2 ) {
    $last_day_prew_mounth -= $first_day - 2;
}


$q = 1;
$f = 1;
$p='';
$num_of_days = cal_days_in_month(CAL_GREGORIAN, $mounth, $year);
$k=($first_day*1 + $num_of_days*1 - 1) / 7;
for ($i = 0; $i < $k; $i++) {
    $p .= '<tr>';
    for ($j = 0; $j < 7; $j++){
        if($i==0){
            if($j >= $first_day-1) {
                $p .= "<td class='f_first_inside'  valign='top'><div class='box_cube'><div class='cube'>
                <div class='h6'>".$q."</div>
                <div class='h5'>...</div>
                </div>
                <div class='relese'></div>
                <div class='relese'></div>
                <div class='relese'></div></td>";
                $q++;
            }
            else {
                $p .= "<td class='passive_sec f_first_inside'  valign='top'><div class='cube'><div class='h6'>" . $last_day_prew_mounth . "</div></div>
                </td>";
                $last_day_prew_mounth++;
            }
        }
        else{
            if($q<=$num_of_days) {
                $p .= "<td class='f_first_inside'  valign='top'><div class='box_cube'><div class='cube'>
                <div class='h6'>".$q."</div>
                <div class='h5'>...</div>
                </div>
                <div class='relese'></div>
                <div class='relese'></div>
                <div class='relese'></div></td>";
            }else {
                $p .= "<td class='passive_sec f_first_inside'  valign='top'><div class='cube'><div class='h6'>" . $f . "</div>
                </td>";
                $f++;
            }
            $q++;
        }
    }
    $p .="</tr>";
}
$array['year'] = $year;
$array['mounth'] = $mounths[$mounth];
$array["mounth_number"] = $mounth;
$array["table"] = $p;

echo json_encode($array)
?>