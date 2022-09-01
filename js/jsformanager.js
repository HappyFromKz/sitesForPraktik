$(function(){
    $('#invite').on('click', function (){
        var parent = $('#invite').val();
        $.ajax({
            method: "POST",
            url: "funcformanagerinvite.php",
            datyType:'html',
            data: {'parent': parent},
            beforeSend: (function(){
                $("#invite").prop("disabled", true);
            }),
            success: (function(data) {
                document.getElementById("queuenumber").innerHTML = data;
                $("#invite").prop("disabled", false);
            })
        })
    })
})
