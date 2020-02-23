<?php
  function csvtojson($file,$delimiter)
  {
    $rown=1;
    if (($handle = fopen($file, "r")) === false)
      die("can't open the file.");
    $csv_headers = fgetcsv($handle, 4000, $delimiter);
    $row = fgetcsv($handle, 4000, $delimiter);
    $csv_json = array();
    $csv_json[] = array_combine($csv_headers, $row);
    fclose($handle);
    return json_encode($csv_json);
  }

  $jsonresult = csvtojson("data.csv", ";");
  echo "<p>Your CSV file in JSON format: ".$jsonresult."</p>";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TaskCSV</title>
  </head>
  <body>
    <canvas id="myChart" width="400" height="400"></canvas>
    <canvas id="yourChart" width="400" height="400"></canvas>
    <script src="node_modules/chart.js/dist/Chart.js"></script>
    <script type="text/javascript">
      var data = '<?php echo $jsonresult ?>';
      var ctx = document.getElementById('myChart').getContext('2d');
      var c_data = JSON.parse(data)[0];
      var mydata = Object.values(c_data);
      var headers = Object.keys(c_data);
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: headers,
              datasets: [{
                  label: 'Какой-то заголовок',
                  data: mydata,
                  backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
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
                          beginAtZero: true
                      }
                  }]
              }
          }
      });
    </script>
  </body>
</html>
