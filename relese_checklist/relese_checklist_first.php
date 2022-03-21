    <?php
        $sport_types= 'select * from sports_type';
        $sport_types_querry=mysqli_query($con,$sport_types);
        $take_types='';
        $color_type=2;
        $count=0;
        // $active_class='';
        while ($sport_types_row = mysqli_fetch_assoc($sport_types_querry)) {
            $count++;
            if($count==1){
                $active_class="active";
            }else{
                $active_class="";
            }
            $take_types.='
                <div class="sport'.$color_type.'">'.$sport_types_row['sport_type'].'<div class="shadow"></div></div>
            ';
            $color_type++;
        }
        
        $dates= 'select * from dates';
        $dates_querry=mysqli_query($con,$dates);
        $take_dates='';
        
        while ($dates_row = mysqli_fetch_assoc($dates_querry)) {
            $take_dates.='
                <div class="box1">'.$dates_row['data'].'<i class="fa fa-star-o" style="font-size:18px;"></i></div>
            ';
            
        }
    ?>

<div class="start">
         <div class="nachalo">
            <p class="p">CHECKLISTS</p>
         </div>
    </div>
    <div class="container-fluid d-flex flex-column p-0 start2">
        <div class="mayr d-flex">
             <div class="sport1">
                 <div class="shadow"></div>
             </div>

                <?= $take_types ?>
                <div class="sport9">My Checklists</div> 
        </div>
        <div class="board innline">
            <div class="d-flex boxer">
                    <?= $take_dates ?>
            </div>
    </div>
</div>  
<div class="start">
         <div class="nachalo">
            <p class="p">RELEASES</p>
         </div>
    </div>
    <div class="container-fluid d-flex flex-column p-0 start2">
        <div class="mayr d-flex">

        <div class="sport1"></div>
        <?= $take_types ?>
            
        </div>
         <div class="board innline">
            <div class="d-flex boxer">
            <?= $take_dates ?>
            </div>
    </div>
</div>  
<div class="start">
         <div class="nachalo">
            <p class="p">NEW RELEASES CALENDAR</p>
         </div>
    </div>

    <script>
    $('.mayr div').click(function(){ 
        if($(this).hasClass('active')){       
            $('.mayr div').removeClass("active"); 
        }
        else{
            $('.mayr div').removeClass("active");         
            $(this).addClass("active"); 
        }
    });
    </script>

  

