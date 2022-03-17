

if($(".favorite_dates").attr("aria-hidden") == "true") {
    $(".favorite_dates").attr("aria-hidden", false)
}

// $(document).ready(function(){
//     $('.sport').click(function() {
//         $('.sport') .removeClass('active_sport');
//                      $(this).addClass('active_sport');
//                     console.log('it`s work');

//         console.log('hellow');
//     });
// });


$(document).ready(function(){

        for (let index = 2; index < 9 ; index++) {
            $classexample =  $('.sport' + index)
            //console.log($classexample);
            $($classexample).click(function(e){
                e.preventDefault()
                $($classexample);
                $(this).addClass('active_sport');

                console.log('it`s work');
            })
            
        }

});


