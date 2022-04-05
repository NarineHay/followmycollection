<?php
    $mounth_number = date('n');
    $mounth = date('F');
    $year = date('Y');
    $first_day = date('w', strtotime('first day of this month'));
    $this_day = date("d");

    if($first_day == 0 ) {
        $first_day = 7;
    }

    $last_day_prew_mounth = date('d', strtotime('last day of previous month'));

    $days_number = 1;
    $pasive_days = 1;
    $table='';
    $num_of_days = cal_days_in_month(CAL_GREGORIAN, $mounth_number, $year);
    $k=($first_day*1 + $num_of_days*1 - 1) / 7;
    for ($i = 0; $i < $k; $i++) {
        $table  .= '<tr>';
        for ($j = 0; $j < 7; $j++){

            if($this_day == $days_number) {
                $active_day = "this_day";
            }else {
                $active_day = "";
            }

            if($i==0){
                if($j >= $first_day-1) {
                    $dates = str_pad($days_number,2,'0', STR_PAD_LEFT);
                    $table .= "<td class='" . $active_day . "'>".$dates."</td>";
                    $days_number++;
                }
                else {
                    $table .= "<td class='passive'>" . $last_day_prew_mounth . "</td>";
                    $last_day_prew_mounth --;
                }
            }
            else{
                if($days_number<=$num_of_days) {
                    $dates = str_pad($days_number,2,'0', STR_PAD_LEFT);
                    $table .= "<td class='" . $active_day . "'>".$dates."</td>";
                }else {
                    $dates1 = str_pad($pasive_days,2,'0', STR_PAD_LEFT);
                    $table .= "<td class='passive'>" . $dates1 . "</td>";
                    $pasive_days++;
                }
                $days_number++;
            }
        }
        $table .="</tr>";
    }

    echo $table;

?>