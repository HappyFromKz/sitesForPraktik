function ajaxset(){
        $.ajax({
            method: "POST",
            url: "tablo.php",
            success: (function(data) {
                let arr = data.split('|');
                if (arr[0]==='Бакалавр-1'){
                    document.getElementById("bakalavr1").innerHTML = arr[1];
                } else if(arr[0]==='Бакалавр-2'){
                    document.getElementById("bakalavr2").innerHTML = arr[1];
                }else if(arr[0]==='Бакалавр-3'){
                    document.getElementById("bakalavr3").innerHTML = arr[1];
                }else if(arr[0]==='Бакалавр-4'){
                    document.getElementById("bakalavr4").innerHTML = arr[1];
                }else if(arr[0]==='Бакалавр-5'){
                    document.getElementById("bakalavr5").innerHTML = arr[1];
                }else if(arr[0]==='Бакалавр-6'){
                    document.getElementById("bakalavr6").innerHTML = arr[1];
                }else if(arr[0]==='Бакалавр-7'){
                    document.getElementById("bakalavr7").innerHTML = arr[1];
                }else if(arr[0]==='Бакалавр-8'){
                    document.getElementById("bakalavr8").innerHTML = arr[1];
                }else if(arr[0]==='Бакалавр-9'){
                    document.getElementById("bakalavr9").innerHTML = arr[1];
                }else if(arr[0]==='Бакалавр-10'){
                    document.getElementById("bakalavr10").innerHTML = arr[1];
                }else if(arr[0]==='Бакалавр-11'){
                    document.getElementById("bakalavr11").innerHTML = arr[1];
                }else if(arr[0]==='Бакалавр-12'){
                    document.getElementById("bakalavr12").innerHTML = arr[1];
                }else if(arr[0]==='Магистрант/PhD-13'){
                    document.getElementById("magphd13").innerHTML = arr[1];
                }else if(arr[0]==='Магистрант/PhD-14'){
                    document.getElementById("magphd14").innerHTML = arr[1];
                }else if(arr[0]==='Колледж-15'){
                    document.getElementById("colluge15").innerHTML = arr[1];
                }
                $("#updatebutton").prop("disabled", false);
            })
        })
}
setInterval(ajaxset, 500)