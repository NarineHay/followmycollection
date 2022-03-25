
<?php
$mounth_number = date('n');
$mounth = date('F');
$year = date('Y');
$first_day = date('w', strtotime('first day of this month'));

if($first_day == 0 ) {
    $first_day = 7;
}

$last_day_prew_mounth = date('d', strtotime('last day of previous month'));

$q = 1;
$f = 1;
$p='';
$num_of_days = cal_days_in_month(CAL_GREGORIAN, $mounth_number, $year);
$k=($first_day*1 + $num_of_days*1 - 1) / 7;
for ($i = 0; $i < $k; $i++) {
    $p .= '<tr class="f_first">';
    for ($j = 0; $j < 7; $j++){
        if($i==0){
            if($j >= $first_day-1) {

                $dates = str_pad($q,2,'0', STR_PAD_LEFT);
                $p .= "<td class='f_first_inside'><div class='cube'>".$dates."</div></td>";
                $q++;
            }
            else {
                $p .= "<td class='passive'><div class='cube'>" . $last_day_prew_mounth . "</div></td>";
                $last_day_prew_mounth --;
            }
        }
        else{
            if($q<=$num_of_days) {
                $dates = str_pad($q,2,'0', STR_PAD_LEFT);
                $p .= "<td class='f_first_inside'><div class='cube'>".$dates."</div></td>";
            }else {
                $dates1 = str_pad($f,2,'0', STR_PAD_LEFT);
                $p .= "<td class='passive f_first_inside'><div class='cube'>" . $dates1 . "</div></td>";
                $f++;
            }
            $q++;
        }
    }
    $p .="</tr>";
}

?>


<table class="calendar">

    <tbody class="calendar_body">
        <thead class="empty">
            <th>MONDAY</th>
            <th>TUESDAY</th>
            <th>WEDNESDAY</th>
            <th>THURSDAY</th>
            <th>FRIDAY</th>
            <th>SATURDAY</th>
            <th>SUNDAY</th>
        </thead>
        <tr>
            <?= $p ?>
        </tr>
    </tbody>
   
</table>

<br>
<br>
<br>
<br>
<br>
<br>
<br>