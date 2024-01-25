<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['gauge']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['Label', 80]  
            ]);

            var options = {
                width: 400,
                height: 420,
                redFrom: 90,
                redTo: 120,
                yellowFrom:75,
                yellowTo: 90,
                minorTicks: 5
            };

            var chart = new google.visualization.Gauge(document.getElementById('gauge_div'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="gauge_div"></div>
</body>
</html>