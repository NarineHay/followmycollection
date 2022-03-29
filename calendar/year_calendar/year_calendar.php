<?php
    $days = array("M", "T", "W", "T", "F", "S", "S");
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
    $year = date('Y');
    $prev_year = $year-1;
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

        $p .= '<div class="lll">
                    <table class="jjj"> 
                        <div class="name_mount">
                            <h6 calss="year_month_names">' . $mounth . '</h6>
                                <h5 class="year_cal_cover" >></h5>
                        </div>
                        <thead class="tr">' . $ths . '</thead>';
        $num_of_days = cal_days_in_month(CAL_GREGORIAN, $y, $year);
        $k=($first_day*1 + $num_of_days*1 - 1) / 7;
        for ($i = 0; $i < $k; $i++) {
            $p .= '<tbody><tr>';
            for ($j = 0; $j < 7; $j++){
                if($i==0){
                    if($j >= $first_day-1) {
                        $dates = str_pad($q,2,'0', STR_PAD_LEFT);
                        $p .= "<td>" . $dates . "</td>";
                        $q++;
                    }
                    else {
                        $p .= "<td>" . $last_day_prew_mounth . "</td>";
                        $last_day_prew_mounth ++;
                    }
                }
                else{
                    if($q<=$num_of_days) {
                        $dates = str_pad($q,2,'0', STR_PAD_LEFT);
                        $p .= "<td>" . $dates . "</td>";
                    }else {
                        $dates1 = str_pad($f,2,'0', STR_PAD_LEFT);
                        $p .= "<td>" . $dates1 . "</td>";
                        $f++;
                    }
                    $q++;
                }
            }
            $p .="</tr></tbody>";
        }
        $p .= '</table></div>';

        if($y == 4 || $y == 8 || $y == 12) {
            $p .= "</div>";
        }
    }

    ?>


    <table class="calendar">
        <tbody class="calendar_body">
            <tr class="empty">
                <td></td>
            </tr>
        </tbody>
    </table>

    <div class="ggg">

        <?= $p ?>

<!--            <div class="arajin1">-->
<!---->
<!--        <div>-->
<!--            <table class="jjj">-->
<!--                <div class="name_mount"><h6 calss="year_month_names"> JANUARY</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="tr">-->
<!--                --><?//= $ths ?>
<!--            </thead>-->
<!--                <tbody>-->
<!--                    <tr class="tr">-->
<!--                        <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                        </tr>-->
<!--                        <tr class="tr">-->
<!--                        <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                        </tr>-->
<!--                        <tr class="tr">-->
<!--                        <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                        </tr>-->
<!--                        <tr class="tr">-->
<!--                        <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                        </tr>-->
<!--                        <tr class="tr">-->
<!--                        <td>28 <td  class="year_cal_cover">1-->
<!--                        <td  class="year_cal_cover">2-->
<!--                        <td  class="year_cal_cover">3-->
<!--                        <td  class="year_cal_cover">4-->
<!--                        <td  class="year_cal_cover">5-->
<!--                        <td  class="year_cal_cover">6-->
<!--                    </tr>-->
<!--                </tbody>-->
<!--            </table>-->
<!--        </div>-->
<!--        -->
<!--        <div>-->
<!--            <table class="jjj">-->
<!--            <div class="name_mount"><h6 calss="year_month_names"> FEBRUARY</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="tr">-->
<!--            <th> M <th> T <th> W <th> T <th> F <th> S <th> S-->
<!--            </thead>-->
<!--            <tr class="tr">-->
<!--                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>28 <td  class="year_cal_cover">1-->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3-->
<!--                <td  class="year_cal_cover">4-->
<!--                <td  class="year_cal_cover">5-->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--        <div>-->
<!--            <table class="jjj">-->
<!--            <div class="name_mount"><h6 calss="year_month_names"> MARCH</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="tr">-->
<!--            <th> M <th> T <th> W <th> T <th> F <th> S <th> S-->
<!--            </thead>-->
<!--            <tr class="tr">-->
<!--                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>28 <td  class="year_cal_cover">1-->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3-->
<!--                <td  class="year_cal_cover">4-->
<!--                <td  class="year_cal_cover">5-->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--        <div>-->
<!--            <table class="jjj">-->
<!--            <div class="name_mount"><h6 calss="year_month_names"> APRIL</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="tr">-->
<!--            <th> M <th> T <th> W <th> T <th> F <th> S <th> S-->
<!--            </thead>-->
<!--            <tr class="tr">-->
<!--                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>28 <td  class="year_cal_cover">1-->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3-->
<!--                <td  class="year_cal_cover">4-->
<!--                <td  class="year_cal_cover">5-->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="arajin5">-->
<!--    <div>-->
<!--            <table class="jjj">-->
<!--            <div class="name_mount"><h6 calss="year_month_names"> MAY</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="tr">-->
<!--            <th> M <th> T <th> W <th> T <th> F <th> S <th> S-->
<!--            </thead>-->
<!--            <tr class="tr">-->
<!--                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>28 <td  class="year_cal_cover">1-->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3-->
<!--                <td  class="year_cal_cover">4-->
<!--                <td  class="year_cal_cover">5-->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--        <div>-->
<!--            <table class="jjj">-->
<!--            <div class="name_mount"><h6 calss="year_month_names"> JUNE</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="tr">-->
<!--            <th> M <th> T <th> W <th> T <th> F <th> S <th> S-->
<!--            </thead>-->
<!--            <tr class="tr">-->
<!--                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>28 <td  class="year_cal_cover">1-->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3-->
<!--                <td  class="year_cal_cover">4-->
<!--                <td  class="year_cal_cover">5-->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--        <div>-->
<!--            <table class="jjj">-->
<!--            <div class="name_mount"><h6 calss="year_month_names"> JULY</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="tr">-->
<!--            <th> M <th> T <th> W <th> T <th> F <th> S <th> S-->
<!--            </thead>-->
<!--            <tr class="tr">-->
<!--                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>28 <td  class="year_cal_cover">1-->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3-->
<!--                <td  class="year_cal_cover">4-->
<!--                <td  class="year_cal_cover">5-->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--        <div>-->
<!--            <table class="jjj">-->
<!--            <div class="name_mount"><h6 calss="year_month_names"> AUGUST</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="tr">-->
<!--            <th> M <th> T <th> W <th> T <th> F <th> S <th> S-->
<!--            </thead>-->
<!--            <tr class="tr">-->
<!--                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>28 <td  class="year_cal_cover">1-->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3-->
<!--                <td  class="year_cal_cover">4-->
<!--                <td  class="year_cal_cover">5-->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="arajin9">-->
<!--    <div >-->
<!--            <table class="jjj">-->
<!--            <div class="name_mount"><h6 calss="year_month_names"> SEPTEMBER</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="tr">-->
<!--            <th> M <th> T <th> W <th> T <th> F <th> S <th> S-->
<!--            </thead>-->
<!--            <tr class="tr">-->
<!--                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>28 <td  class="year_cal_cover">1-->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3-->
<!--                <td  class="year_cal_cover">4-->
<!--                <td  class="year_cal_cover">5-->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--        <div>-->
<!--            <table class="jjj">-->
<!--            <div class="name_mount"><h6 calss="year_month_names"> OCTOBER</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="tr">-->
<!--            <th> M <th> T <th> W <th> T <th> F <th> S <th> S-->
<!--            </thead>-->
<!--            <tr class="tr">-->
<!--                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>28 <td  class="year_cal_cover">1-->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3-->
<!--                <td  class="year_cal_cover">4-->
<!--                <td  class="year_cal_cover">5-->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--        <div>-->
<!--            <table class="jjj">-->
<!--            <div class="name_mount"><h6 calss="year_month_names"> NOVEMBER</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="tr">-->
<!--            <th> M <th> T <th> W <th> T <th> F <th> S <th> S-->
<!--            </thead>-->
<!--            <tr class="tr">-->
<!--                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>28 <td  class="year_cal_cover">1-->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3-->
<!--                <td  class="year_cal_cover">4-->
<!--                <td  class="year_cal_cover">5-->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--        <div>-->
<!--            <table class="jjj">-->
<!--            <div class="name_mount"><h6 calss="year_month_names"> DECEMBER</h6><h5 class="year_cal_cover"> > </h5></div>-->
<!--            <thead class="thead">-->
<!--            <th> M <th> T <th> W <th> T <th> F <th> S <th> S-->
<!--            </thead>-->
<!--            <tr class="tr">-->
<!--                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27-->
<!--                </tr>-->
<!--                <tr class="tr">-->
<!--                <td>28 <td  class="year_cal_cover">1-->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3-->
<!--                <td  class="year_cal_cover">4-->
<!--                <td  class="year_cal_cover">5-->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--    </div>-->
    

</div>

<script>
    // $(".year_cal_cover").click(function() {
    //     let choose_calendar = $(this).attr('data-mounth')
    //     $.post(
    //         "../calendar.php",
    //         {choose_calendar},
    //         function(ardyunq) {
    //             location.reload()                
    //         }
    //     )
    // }) 
</script>