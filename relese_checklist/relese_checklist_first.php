<?php
        $sport_types= 'select * from sports_type';
        $sport_types_querry=mysqli_query($con,$sport_types);
        $take_types='';
        $take_types1='';
        $color_type=2;
        $count=0;
        // $active_class='';
        $dates= 'select * from dates';
        $dates_querry=mysqli_query($con,$dates);
        $take_dates='';
        while ($dates_row = mysqli_fetch_assoc($dates_querry)) {
            if($dates_row['status'] != 1){
            $take_dates.='
                <div class="box1" data-id='.$dates_row['id'].' data-checked="false"><p class="">'.$dates_row['data'].'</p><i class="star_o i-click fa fa-star" style="color:" id='.$dates_row['id'].'></i></div>
            ';
            }else{
                $take_dates.='
                <div class="box1" data-id='.$dates_row['id'].' data-checked="true"><p class="">'.$dates_row['data'].'</p><i class="star_o i-click fa fa-star"  style="color:gold" id='.$dates_row['id'].'></i></div>
            '; 
            }
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
            $take_types1.='
            <div class="sport'.$color_type.'" onClick="slide1('. "'" .$sport_types_row['sport_type']. "'"  .')">'.$sport_types_row['sport_type'].'<div class="date_control">'.$take_dates.'</div>'.'<div class="shadow"></div></div>
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
                    <?php
                        if (!empty($user_id)) {
                    ?>
                            <div class="sport9">My Checklists</div>
                    <?php
                        }
                    ?>
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
            </div>
        </div>
</div>
<div class="start">
         <div class="nachalo">
            <p class="p">RELEASES</p>
         </div>
    </div>
    <div class="container-fluid d-flex flex-column p-0 start2" >
        <div class="mayr d-flex">
        <div class="sport1"></div>
        <?= $take_types1 ?>
        </div>
        <div class="bigger_block_slider">
        <div class="eee1">
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
<a name="cal"></a>
<div class="start">
         <div class="nachalo">
            <p class="p">NEW RELEASES CALENDAR</p>
         </div>
    </div>
    <script>
        var kids=''
        $('.mayr>div').click(function(event){
            
            //  kids = $( event.target ).children().children();
            // // console.log(event.target.tagName)
            // if($(this).hasClass('active')){
            //     $('.mayr>div').removeClass("active");
            // }
            // else{
            //     $('.mayr>div').removeClass("active");
            //     $(this).addClass("active");
            // }
            if($(window).width() <= '1275'){
                 $(this).css({'height': "350px","clip-path": 'unset','margin-top':' 0px','padding-top':'12px'})
            }
            if($(window).width() > '1275') {
                $(this).css({"clip-path": 'polygon(20% 40%, 76% 40%, 100% 100%, 0% 100%)', "padding-top": '56px', "pointer-events": 'none'})

            }
        });
        // ------------------------------------------------------------------------
       
        let clicks = document.getElementsByClassName('click_me')
        for(let i = 0; i < clicks.length; i++) {
            clicks[i].addEventListener('click', f1)
        }
        function f1() {
            for(let q =0; q < clicks.length;q++) {
                clicks[q].addEventListener('click', f1)
            }
            console.log('sprots');
        }
        $(".mayr.date_control").click(function () {
            console.log('box');
        })
        // ------------------------------------------------------------------------
        

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
        function slide1( params) {
        let a = $('.eee1')
            switch (params) {
                case "Baseball":
                    a.removeClass();
                    a.addClass("eee1 slide");
                break;
                case "Football":
                    a.removeClass();
                    a.addClass("eee1 slide2");
                break;
                case "Basketball":
                    a.removeClass();
                    a.addClass("eee1 slide3");
                break;
                case "Hockey":
                    a.removeClass();
                    a.addClass("eee1 slide4");
                break;
                case "Soccer":
                    a.removeClass();
                    a.addClass("eee1 slide5");
                break;
                case "Fighting":
                    a.removeClass();
                    a.addClass("eee1 slide6");
                break;
                case "Autosport":
                    a.removeClass();
                    a.addClass("eee1 slide7");
                break;
        default:
        console.log("Sorry, we are out of ");
    }
        }
        $('body').on('click', ".box1", function() {
            // console.log(111)
            var checked
            if($(this).attr('data-checked') == 'false'){
                checked = true
                // console.log($(this).attr('data-checked')+'---if');

                $(this).css('color', 'gold');
                $(this).attr('data-checked',true)
                // console.log($(this).attr('data-checked')+'---if');
            }else{
                checked = false
                // console.log($(this).attr('data-checked')+'-----else');
                $(this).css('color', 'white');
                $(this).attr('data-checked',false)
                console.log(8468);
               
                // console.log($(this).attr('data-checked')+'-----else');

            }
            let id = $(this).attr('data-id')
           console.log(id)
            $.ajax({
                method:"POST",
                url: "rate_test.php",
                data:{id, checked},
                success:function(r){
                    console.log(r)
                }
            });
        });
       

    </script>
    <style>
        .bigger_block_slider{
            width: 81vw;
            overflow:hidden;
        }
    </style>