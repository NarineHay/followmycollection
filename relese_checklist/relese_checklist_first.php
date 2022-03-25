    <?php
        $sport_types= 'select * from sports_type';
        $sport_types_querry=mysqli_query($con,$sport_types);
        $take_types='';
        $color_type=2;
        $count=0;
        // $active_class='';
       
        
        $dates= 'select * from dates';
        $dates_querry=mysqli_query($con,$dates);
        $take_dates='';
        
        while ($dates_row = mysqli_fetch_assoc($dates_querry)) {
            $take_dates.='
                <div class="box1">'.$dates_row['data'].'<i class="star_o i-click fa fa-star-o"></i></div>
            ';
            
        }
        while ($sport_types_row = mysqli_fetch_assoc($sport_types_querry)) {
            $count++;
            if($count==1){
                $active_class="active";
            }else{
                $active_class="";
            }
            $take_types.='
                <div class="sport'.$color_type.'" onClick="slide('. "'" .$sport_types_row['sport_type']. "'"  .')">'.$sport_types_row['sport_type'].'<div class="date_control">'.$take_dates.'</div>'.'<div class="shadow"></div></div>
            ';
            $color_type++;
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
        <div class="bigger_block_slider">
            <div class="eee">
                <div class="d-flex innline lock">
                    <div class="d-flex boxer ">
                        

                    </div>
                </div>
                <div class="d-flex innline lock1" >
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                <div class="d-flex innline lock2" >
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                <div class="d-flex innline lock3" >
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                <div class="d-flex innline lock4">
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                <div class="d-flex innline lock5" >
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                <div class="d-flex innline lock6">
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                <div class="d-flex innline lock7" >
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                
                

                <div class="sport9">My Checklists</div>
        </div>
        <div class="d-flex innline" style="width: 100%;height: 230px;background: #6EA4AE;justify-content: space-around;align-items: center;">
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
            <div class="sport1">
                <div class="shadow"></div>
            </div>


        <div class="sport1"></div>
        <?= $take_types ?>
       


            <?= $take_types ?>
            <div class="sport9">My Checklists</div>
        </div>
        <div class="d-flex innline" style="width: 100%;height: 230px;background: #6EA4AE;justify-content: space-around;align-items: center;">
            <div class="d-flex boxer">
                <?= $take_dates ?>
            </div>

        </div>
        <div class="bigger_block_slider">
        <div class="eee">
                <div class="d-flex innline lock">
                    <div class="d-flex boxer ">
                       

                    </div>
                </div>
                <div class="d-flex innline lock1">
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>
                      

                    </div>
                </div>
                <div class="d-flex innline lock2">
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                <div class="d-flex innline lock3">
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                <div class="d-flex innline lock4">
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                <div class="d-flex innline lock5">
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                <div class="d-flex innline lock6" >
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                <div class="d-flex innline lock7">
                    <div class="d-flex boxer ">
                        <?= $take_dates ?>

                    </div>
                </div>
                
                
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

    function slide( params) {
        let a = $('.eee')
            switch (params) {
                case "Baseball":
                    a.removeClass();
                    a.addClass("eee slide");
                break;
                case "Football":
                    a.removeClass();
                    a.addClass("eee slide2");
                break;
                case "Basketball":
                    a.removeClass();
                    a.addClass("eee slide3");
                break;
                case "Hockey":
                    a.removeClass();
                    a.addClass("eee slide4");
                break;
                case "Soccer":
                    a.removeClass();
                    a.addClass("eee slide5");
                break;
                case "Fighting":
                    a.removeClass();
                    a.addClass("eee slide6");
                break;
                case "Autosport":
                    a.removeClass();
                    a.addClass("eee slide7");
                break;

  default:
    console.log("Sorry, we are out of ");
}


        }
        

        $( ".i-click" ).click(function() {
            $(this ).css('color', 'gold');
        });
        
    </script>
    <style>
        .bigger_block_slider{
            width: 81vw;
            overflow:hidden;
          
        }
        
        
    </style>

