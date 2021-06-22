<!DOCTYPE html>
<html>
    <head>
        <title>Gráfica Lineal</title>
        <style type="text/css">
            BODY {
                    width:70%;
                    padding-left: 12%;
                }
                
                #chart-container {
                    width: 100%;
                    height: auto;
                }
        </style>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
    </head>
    <body>
        
        
        <h1>Gráfica Lineal</h1>
        
        </center>
        <div id="chart-container">
            <canvas id="graphCanvas1"></canvas>
        </div>
        <center>
        
        
       
        
    <script>
        $(document).ready(function () {
            lineChart();
        });
        
        function lineChart()
        {
            {
                $.post("datas.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                     var timer = [];
                     
                    for (var i in data) {
                        name.push(data[i].student_name);
                        timer.push(data[i].timer);
                    
                    }
                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Minutos',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: timer,
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
                            }
                        ]
                    };
                    var graphTarget = $("#graphCanvas1");
                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata
                    });
                });
            }
        }   
    </script>
</body>
</html>
