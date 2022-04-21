$(".first_part").click(function() {
    let user_id = $(this).find(".users_id").val()
    location.assign("/profile.php?id=" + user_id)
})