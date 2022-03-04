$(".after_week").click(function () {
    let last_day_of_week = $(".days:last").attr("data-day")
    let this_mounth = $(".mounth").attr("data-mounth")
    let this_year = $(".year").html()
    let this_thursday_day = $(".this_thursday_day").val()

    $.post(
        "calendar/week_calendar/after_week_calendar.php",
        {last_day_of_week, this_mounth, this_year, this_thursday_day},
        function (result){
            let res = JSON.parse(result)
            $(".calendar_header").html(res.week_days)
            $(".mounth").html(res.week_mounth)
            $(".mounth").attr("data-mounth", res.week_mounth_number)
            $(".this_thursday_day").val(res.this_thursday_day)
            console.log(res.this_thursday_day)
        }
    )

})