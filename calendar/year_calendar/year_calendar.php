<?php
    $days = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
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
        <tr class="fel">
            <?= $trs ?>
        </tr>
    </tbody>
</table>



   
    <div class="ggg">
    <div class="arajin">
        
        <div class="lll">
            <table class="jjj-f">
                <div class="name_mount"><h6 calss="year_month_names"> JANUARY</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="tr">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>
        <div>
            <table class="jjj">
            <div class="name_mount"><h6 calss="year_month_names"> FEBRUARY</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="tr">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>  
        <div>
            <table class="jjj">
            <div class="name_mount"><h6 calss="year_month_names"> MARCH</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="tr">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>
        <div>
            <table class="jjj">
            <div class="name_mount"><h6 calss="year_month_names"> APRIL</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="tr">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>
    </div>
    <div class="erkrord">
    <div class="lll">
            <table class="jjj">
            <div class="name_mount"><h6 calss="year_month_names"> MAY</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="tr">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>
        <div>
            <table class="jjj">
            <div class="name_mount"><h6 calss="year_month_names"> JUNE</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="tr">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>  
        <div>
            <table class="jjj">
            <div class="name_mount"><h6 calss="year_month_names"> JULY</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="tr">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>
        <div>
            <table class="jjj">
            <div class="name_mount"><h6 calss="year_month_names"> AUGUST</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="tr">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>
    </div>
    <div class="erord">
    <div class="lll">
            <table class="jjj">
            <div class="name_mount"><h6 calss="year_month_names"> SEPTEMBER</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="tr">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>
        <div>
            <table class="jjj">
            <div class="name_mount"><h6 calss="year_month_names"> OCTOBER</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="tr">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>  
        <div>
            <table class="jjj">
            <div class="name_mount"><h6 calss="year_month_names"> NOVEMBER</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="tr">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>
        <div>
            <table class="jjj">
            <div class="name_mount"><h6 calss="year_month_names"> DECEMBER</h6><h5 class="year_cal_cover"> > </h5></div>
            <thead class="thead">
            <th> M <th> T <th> W <th> T <th> F <th> S <th> S
            </thead>
            <tr class="tr">
                <td class="year_cal_cover">31 <td> 1 <td> 2 <td> 3 <td> 4 <td> 5 <td> 6
                </tr>
                <tr class="tr">
                <td>7 <td>8 <td>9 <td>10 <td>11 <td>12 <td>13
                </tr>
                <tr class="tr">
                <td>14 <td>15 <td>16 <td>17 <td>18 <td>19 <td>20
                </tr>
                <tr class="tr">
                <td>21 <td>21 <td>23 <td>24 <td>25 <td>26 <td>27
                </tr>
                <tr class="tr">
                <td>28 <td  class="year_cal_cover">1 
                <td  class="year_cal_cover">2
                <td  class="year_cal_cover">3 
                <td  class="year_cal_cover">4 
                <td  class="year_cal_cover">5 
                <td  class="year_cal_cover">6
            </tr>
            </table>
        </div>
    </div>

</div>
    





