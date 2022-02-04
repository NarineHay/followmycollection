$(".fa-trash").click(function () {
    let checklist_id = $(this).parent().parent().attr("data-collid")
    $(this).parent().parent().remove()
    $.post(
        "Checklist-php/delete.php",
        {checklist_id: checklist_id},
        function (result) {
            $(".delete").html(result)
        }
    )
})


$('body').on('click', '.info', function(){
        let coll_id=$(this).attr('data-collId')
        let year_prod=""
        let product="favorite"
        let sport_type=""
        $.ajax({
            type: 'post',
            url: 'navbar_products.php',
            data: {coll_id, year_prod, sport_type, product},
            success: function(ar){
                $("#nav").html(ar)
            }
        })
})