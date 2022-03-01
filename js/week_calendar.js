$(".after_week").click(function () {
    let last_day_of_week = $(".days:last").attr("data-day")

    $.post(
        "calendar/week_calendar/after_week_calendar.php",
        {last_day_of_week},
        function (result){
            console.log(result)
        }
    )

})