$(".before_year").click(function() {
    let year = $(".year").html()
    $.ajax({
        'method': 'post',
        'url': "calendar/year_calendar/before_year_calendar.php",
        'data': {year},
        success: function(res) {
            let result=JSON.parse(res)
            $(".year").html(result.year)
            $(".ggg").html(result.table)
        }
    })
})


$(".after_year").click(function() {
    let year = $(".year").html()
    $.ajax({
        'method': 'post',
        'url': "calendar/year_calendar/after_year_calendar.php",
        'data': {year},
        success: function(res) {
            let result=JSON.parse(res)
            $(".year").html(result.year)
            $(".ggg").html(result.table)
        }
    })
})