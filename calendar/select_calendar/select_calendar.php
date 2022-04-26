<?php
//    if(isset($_POST['mounth'])) {
//        $mounth = $_POST['mounth'];
//        $year = $_POST['year'];
//        $mounth_number = $_POST['mounth_number'];
//        $last_mounth_number = $mounth_number - 1;
//
//        if($last_mounth_number == 0) {
//            $last_mounth_number = 12;
//        }
//
//        $last_day_prew_mounth = cal_days_in_month(CAL_GREGORIAN, $last_mounth_number, $year);
//        $first_day = date('w', strtotime("$mounth $year"));
//    }else {
//        $mounth = date('F');
//        $year = date('Y');
//        $first_day = date('w', strtotime('first day of this month'));
//        $last_day_prew_mounth = date('d', strtotime('last day of previous month'));
//        $mounth_number = 1;
//        $last_mounth_number = $mounth_number;
//    }
//
//    $this_day = date('d');
//
//
//    $k1 = "";
//
//    if($first_day == 0 ) {
//        $first_day = 7;
//    }
//
//    if($first_day > 2 ) {
//        $last_day_prew_mounth -= $first_day - 2;
//    }
//
//    $q = 1;
//    $f = 1;
//    $p='';
//
//    $num_of_days = cal_days_in_month(CAL_GREGORIAN, $mounth_number, $year);
////    $k=($first_day*1 + $num_of_days*1 - 1) / 7;
//    for ($i = 0; $i < 6; $i++) {
//        $table  .= '<tr>';
//        for ($j = 0; $j < 7; $j++){
//
//            if($this_day == $days_number) {
//                $active_day = "this_day";
//            }else {
//                $active_day = "";
//            }
//
//            if($i==0){
//                if($j >= $first_day-1) {
//                    $dates = str_pad($days_number,2,'0', STR_PAD_LEFT);
//                    $table .= "<td class='" . $active_day . "'>".$dates."</td>";
//                    $days_number++;
//                }
//                else {
//                    $table .= "<td class='passive'>" . $last_day_prew_mounth . "</td>";
//                    $last_day_prew_mounth --;
//                }
//            }
//            else{
//                if($days_number<=$num_of_days) {
//                    $dates = str_pad($days_number,2,'0', STR_PAD_LEFT);
//                    $table .= "<td class='" . $active_day . "'>".$dates."</td>";
//                }else {
//                    $dates1 = str_pad($pasive_days,2,'0', STR_PAD_LEFT);
//                    $table .= "<td class='passive'>" . $dates1 . "</td>";
//                    $pasive_days++;
//                }
//                $days_number++;
//            }
//        }
//        $table .="</tr>";
//    }
//
//    echo $table;
//
//
?>