<?php
    $days = array("Mon", "Tue", "Wed", "Thu", "Fro", "Sat", "Sun");
    $first_day = date('w', strtotime('first day of this month'));

    if($first_day == 0 ) {
        $first_day = 7;
    }

    $last_day_prew_mounth = date('d', strtotime('last day of previous month'));

    $year = date('Y');$mounth_number = date('n');

    $week_start = date('d', strtotime("monday this week"));

    $table1 = "";
    $trs = "";
    $class = "";

    for($i = 0; $i < 7; $i++) {

        if($week_start > $last_day_prew_mounth) {
            $week_start = 1;
            
        }

        $week_start = str_pad($week_start,2,'0', STR_PAD_LEFT);

        $table1 .= "<th class='days' data-day='" . $week_start . "'>
                    <span>" . $week_start . "</span>
                    <span>" . $days[$i] . "</span>
                </th>";

        
        if($i < 6) {
            $class = "border";
        }else {
            $class = "";
        }
        
        $trs .= "<td class='" . $class . "'>
                       <div style='background: red' class='releses'>
                            <img src=''>
                        </div>
            </td>";
        $week_start ++;
    }
    
    

?>


<table class="calendar">
    <thead class="calendar_header">
        <?= $table1 ?>
    </thead>

    <tbody class="calendar_body">
        <tr class="empty">
            <td></td>
        </tr>
        <tr>
            <?= $trs ?>
        </tr>
    </tbody>
</table>