
    <?php
        $days = array("M", "T", "W", "T", "F", "S", "S");
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


    for($i = 0; $i < 7; $i++) {
        $ths .= "<th>" . $days[$i] . "</th>";
    }

    $year = date('Y');

    for($y = 1; $y < 13; $y++) {
        $mounth = $mounths[$y];
        $first_day = date('w', strtotime("$mounth $year"));

?>
<table class="calendar">
    <thead class="calendar_header">
        <?= $table1 ?>
    </thead>

    <tbody class="calendar_body">
        <tr class="empty">
            <td></td>
        </tr>
        <tr class="fel">
            <?= $trs ?>
        </tr>
    </tbody>
</table>

        if($first_day == 0) {
            $first_day = 7;
        }

        echo $mounth . " / " . $year . " => " . $first_day . "<br>";
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
    <div class="arajin">
        
<!--        <div class="lll">-->
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
        <?= $p ?>
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
<!--                <td>28 <td  class="year_cal_cover">1 -->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3 -->
<!--                <td  class="year_cal_cover">4 -->
<!--                <td  class="year_cal_cover">5 -->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>  -->
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
<!--                <td>28 <td  class="year_cal_cover">1 -->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3 -->
<!--                <td  class="year_cal_cover">4 -->
<!--                <td  class="year_cal_cover">5 -->
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
<!--                <td>28 <td  class="year_cal_cover">1 -->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3 -->
<!--                <td  class="year_cal_cover">4 -->
<!--                <td  class="year_cal_cover">5 -->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="arajin">-->
<!--    <div class="lll">-->
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
<!--                <td>28 <td  class="year_cal_cover">1 -->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3 -->
<!--                <td  class="year_cal_cover">4 -->
<!--                <td  class="year_cal_cover">5 -->
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
<!--                <td>28 <td  class="year_cal_cover">1 -->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3 -->
<!--                <td  class="year_cal_cover">4 -->
<!--                <td  class="year_cal_cover">5 -->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>  -->
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
<!--                <td>28 <td  class="year_cal_cover">1 -->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3 -->
<!--                <td  class="year_cal_cover">4 -->
<!--                <td  class="year_cal_cover">5 -->
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
<!--                <td>28 <td  class="year_cal_cover">1 -->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3 -->
<!--                <td  class="year_cal_cover">4 -->
<!--                <td  class="year_cal_cover">5 -->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="arajin">-->
<!--    <div class="lll">-->
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
<!--                <td>28 <td  class="year_cal_cover">1 -->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3 -->
<!--                <td  class="year_cal_cover">4 -->
<!--                <td  class="year_cal_cover">5 -->
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
<!--                <td>28 <td  class="year_cal_cover">1 -->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3 -->
<!--                <td  class="year_cal_cover">4 -->
<!--                <td  class="year_cal_cover">5 -->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>  -->
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
<!--                <td>28 <td  class="year_cal_cover">1 -->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3 -->
<!--                <td  class="year_cal_cover">4 -->
<!--                <td  class="year_cal_cover">5 -->
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
<!--                <td>28 <td  class="year_cal_cover">1 -->
<!--                <td  class="year_cal_cover">2-->
<!--                <td  class="year_cal_cover">3 -->
<!--                <td  class="year_cal_cover">4 -->
<!--                <td  class="year_cal_cover">5 -->
<!--                <td  class="year_cal_cover">6-->
<!--            </tr>-->
<!--            </table>-->
<!--        </div>-->
    </div>

</div>
    





