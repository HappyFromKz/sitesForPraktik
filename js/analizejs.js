$(function(){
    $('#bdinfo').on('click', function (){
        var date = $('#date').val();
        $.ajax({
            method: "POST",
            url: "analizepsp.php",
            datyType:'html',
            data: {'date': date},
            beforeSend: (function(){
                $("#updatebutton").prop("disabled", true);
            }),
            success: (function(data) {
                    var ctx = document.getElementById("myChart");
                    var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                    datasets: [{
                    label: 'manager statistics',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
                },
                    options: {
                    scales: {
                    yAxes: [{
                    ticks: {
                    beginAtZero:true
                }
                }]
                }
                }
                });


                var arr = data.split('|');
                document.getElementById('1').innerHTML = arr[0];
                document.getElementById('2').innerHTML = arr[1];
                document.getElementById('3').innerHTML = arr[2];
                document.getElementById('4').innerHTML = arr[3];
                document.getElementById('5').innerHTML = arr[4];
                document.getElementById('6').innerHTML = arr[5];
                document.getElementById('7').innerHTML = arr[6];
                document.getElementById('8').innerHTML = arr[7];
                document.getElementById('bakalavr1').innerHTML = arr[8];
                document.getElementById('bakalavr2').innerHTML = arr[9];
                document.getElementById('bakalavr3').innerHTML = arr[10];
                document.getElementById('bakalavr4').innerHTML = arr[11];
                document.getElementById('bakalavr5').innerHTML = arr[12];
                document.getElementById('bakalavr6').innerHTML = arr[13];
                document.getElementById('bakalavr7').innerHTML = arr[14];
                document.getElementById('bakalavr8').innerHTML = arr[15];
                document.getElementById('bakalavr9').innerHTML = arr[16];
                document.getElementById('bakalavr10').innerHTML = arr[17];
                document.getElementById('bakalavr11').innerHTML = arr[18];
                document.getElementById('bakalavr12').innerHTML = arr[19];
                document.getElementById('magphd13').innerHTML = arr[20];
                document.getElementById('magphd14').innerHTML = arr[21];
                document.getElementById('colluge15').innerHTML = arr[22];
                $("#updatebutton").prop("disabled", false);
            })
        })
    })
})