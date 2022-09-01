$(document).ready(function (){
    $('button.buttoninput').on('click', function (){
        var login = $('#loginn').val();
        var password = $('#passwordd').val();

        $.ajax({
            method: "POST",
            url: "autorizeing.php",
            dataType: "html",
            cache: true,
            data: { 'login': login, 'password': password },
            beforeSend: (function(){
                $("button.buttoninput").prop("disabled", true);
            }),
            success: (function(data) {
                if (data === 'true'){
                    window.location = "siteformanager.php"
                    document.getElementById("pinner").innerHTML = '';
                    $("button.buttoninput").prop("disabled", false);
                } else {
                    document.getElementById("pinner").innerHTML = '';
                    document.getElementById("pinner").innerHTML = 'Введенные данные не правильны';
                    $("button.buttoninput").prop("disabled", false);
                }
            })
        })
    })
});