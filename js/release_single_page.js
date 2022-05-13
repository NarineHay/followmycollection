$('.rel_image').click( function () {
    let src = $(this).attr('data-src')
    $('#modal_picture').attr('src', '/images/' + src)
})

$(".reload_page").click(function () {
    location.reload()
})

$(".favorite_release").click(function () {
    let id = $(this).attr('data-r-id')
    let user_id = $(".user_id").val()

    if (user_id != '') {

        if($(this).css('color') == "rgb(255, 255, 255)") {
            $(this).css('color', "gold")
            action = 'add'

        }else {
            $(this).css('color', "white")
            action = 'delete'
        }

        $.post(
            '/favorite_release.php',
            {id, user_id, action},
            function (ardyunq) {
                console.log(ardyunq)
            }
        )
    } else {
        alert("You must be registered to perform this transaction․ Please register")
        location.assign('login-register.php')
    }

})