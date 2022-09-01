$(function(){
    $('#buttonBacalavr').on('click', function (){
        var parent = $('#buttonBacalavr').val();
        $.ajax({
            method: "POST",
            url: "buttonsfuncs.php",
            datyType:'html',
            data: {'parent': parent},
            beforeSend: (function(){
                $("#buttonBacalavr").prop("disabled", true);
                $("#buttonMagPhd").prop("disabled", true);
                $("#buttonCollage").prop("disabled", true);
            }),
            success: (function(data) {
                document.getElementById("queuenumber").innerHTML = data;
            })
        })
    })
    $('#buttonMagPhd').on('click', function (){
        var parent = $('#buttonMagPhd').val();
        $.ajax({
            method: "POST",
            url: "buttonsfuncs.php",
            datyType:'html',
            data: {'parent': parent},
            beforeSend: (function(){
                $("#buttonBacalavr").prop("disabled", true);
                $("#buttonMagPhd").prop("disabled", true);
                $("#buttonCollage").prop("disabled", true);
            }),
            success: (function(data) {
                document.getElementById("queuenumber").innerHTML = data;
            })
        })
    })
    $('#buttonCollage').on('click', function (){
        var parent = $('#buttonCollage').val();
        $.ajax({
            method: "POST",
            url: "buttonsfuncs.php",
            datyType:'html',
            data: {'parent': parent},
            beforeSend: (function(){
                $("#buttonBacalavr").prop("disabled", true);
                $("#buttonMagPhd").prop("disabled", true);
                $("#buttonCollage").prop("disabled", true);
            }),
            success: (function(data) {
                document.getElementById("queuenumber").innerHTML = data;
            })
        })
    })
})