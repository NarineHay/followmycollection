<?php
$mounth_number = date('n');
$mounth = date('F');
$year = date('Y');
$first_day = date('w', strtotime('first day of this month'));

$k1 = "";

if($first_day == 0 ) {
    $first_day = 7;
}

$last_day_prew_mounth = date('d', strtotime('last day of previous month'));

$q = 1;
$f = 1;
$p='';

$num_of_days = cal_days_in_month(CAL_GREGORIAN, $mounth_number, $year);
$k=($first_day*1 + $num_of_days*1 - 1) / 7;

$from_date = date("Y/m/d", strtotime("$mounth $year"));
$to_date = date("Y/m/d", strtotime("+1 MONTH - 1 DAY", strtotime($from_date)));


for ($i = 0; $i < $k; $i++) {

    $p .= '<tr class="f_first">';
    for ($j = 0; $j < 7; $j++){
        $h5 = '';
        $c = 0;
        $dates = str_pad($q,2,'0', STR_PAD_LEFT);
        $divs = '';
        $select_date = "SELECT DAY(collections.release_date) as dd1, collections.sport_type, sports_type.sport_logo, sports_type.background FROM collections, sports_type where collections.sport_type = sports_type.sport_logo AND release_date BETWEEN  '$from_date' AND '$to_date'";
        $date_query = mysqli_query($con, $select_date);
        $count_p = mysqli_num_rows($date_query);

        while($date_row = mysqli_fetch_assoc($date_query)) {

            $k1 = str_pad($date_row['dd1'],2,'0', STR_PAD_LEFT);
            if($k1 == $dates && $c < 3) {
                $c++;
                $divs .= "<div style='background: " . $date_row['background'] . "' class='mounth_releses'>
                            <img src='admin/sport_icons/" . $date_row['sport_logo'] . ".png' >
                        </div>";
            }
        }

        if($c > 2) {
            $h5 = "<div class='h5 select_day' >...</div>";
        }else {
            $h5 = "";
        }

        if($i==0){
            if($j >= $first_day-1) {
                $p .= "<td class='f_first_inside'  valign='top'>
                            <div class='box_cube'>
                                <div class='cube'>
                                    <div class='number_day'>".$dates."</div>"
                                    . $h5 .
                                "</div>
                            </div>"
                    . $divs .
                    "</td>";
                $q++;
            }
            else {
                $p .= "<td class='passive_sec'  valign='top'><div class='cube'>" . $last_day_prew_mounth . "</div></td>";
                $last_day_prew_mounth --;
            }
        }
        else{
            if($q<=$num_of_days) {
                $p .= "<td class='f_first_inside'  valign='top'>
                            <div class='box_cube'>
                                <div class='cube'>
                                    <div class='number_day'>".$dates."</div>"
                                    . $h5 .
                                "</div>
                            </div>"
                    . $divs .
                    "</td>";
            }else {
                $dates1 = str_pad($f,2,'0', STR_PAD_LEFT);
                $p .= "<td class='passive_sec f_first_inside'  valign='top'><div class='cube'>" . $dates1 . "</div>
                </td>";
                $f++;
            }
            $q++;
        }
    }
    $p .="</tr>";
}
?>
<table class="calendar">
    <thead class="empty">
    <th>MONDAY</th>
    <th>TUESDAY</th>
    <th>WEDNESDAY</th>
    <th>THURSDAY</th>
    <th>FRIDAY</th>
    <th>SATURDAY</th>
    <th>SUNDAY</th>
    </thead>
    <tbody class="calendar_body">
    <tr>
        <?= $p ?>
    </tr>
    </tbody>
</table>