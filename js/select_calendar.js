$(".before_select_calendar").click(function() {
    let mounth = $(".mounth").attr("data-mounth")
    let year = $(".year").html()

    $.ajax({
        'method': 'post',
        'url': "calendar/mounth_calendar/before_mounth_calendar.php",
        'data': {mounth, year},
        success: function(res) {
            let result=JSON.parse(res)
            $(".year").html(result.year)
            $(".mounth").html(result.mounth)
            $(".mounth").attr("data-mounth", result.mounth_number)
            $(".calendar_body").html(result.table)
        }
    })
})


$(".after_select_calendar").click(function() {
    let mounth = $(".mounth").attr("data-mounth")
    let year = $(".year").html()
    $.ajax({
        'method': 'post',
        'url': "calendar/mounth_calendar/after_mounth_calendar.php",
        'data': {mounth, year},
        success: function(res) {
            let result=JSON.parse(res)
            $(".year").html(result.year)
            $(".mounth").html(result.mounth)
            $(".mounth").attr("data-mounth", result.mounth_number)
            $(".calendar_body").html(result.table)
        }
    })
})
