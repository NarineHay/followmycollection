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
    

    <tbody class="calendar_body">
        <tr class="empty">
        <?= $table1 ?>
           
        </tr>
       

        
    </tbody>
   
</table>


<div class="first_maunth">
    <div class="f_first">
            <div class="f_first_inside">
                <div class="cube">31</div>
                <?= $trs ?>
            </div>
            <div class="f_first_inside">
                <div class="cube">1</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">2</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">3</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">4</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">5</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">6</div>
            </div>
    </div>
    <div class="f_first">
            <div class="f_first_inside">
                <div class="cube">7</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">8</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">9</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">10</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">11</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">12</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">13</div>
            </div>
    </div>
    <div class="f_first">
            <div class="f_first_inside">
                <div class="cube">14</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">15</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">16</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">17</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">18</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">19</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">20</div>
            </div>
    </div>
    <div class="f_first">
            <div class="f_first_inside">
                <div class="cube">21</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">22</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">23</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">24</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">25</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">26</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">27</div>
            </div>
    </div>
    <div class="f_first">
            <div class="f_first_inside">
                <div class="cube">28</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">1</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">2</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">3</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">4</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">5</div>
            </div>
            <div class="f_first_inside">
                <div class="cube">6</div>
            </div>
    </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>