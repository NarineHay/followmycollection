<?php
    $days = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
    $mounth_number = date('n');
    $year = date('Y');$mounth_number = date('n');

    $week_start = date('d', strtotime("monday this week"));

    $num_of_days = cal_days_in_month(CAL_GREGORIAN, $mounth_number, $year);

    $table1 = "";
    $trs = "";
    $class = "";

    for($i = 0; $i < 7; $i++) {

        $table1 .= "<th data-day='" . $week_start . "'>
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