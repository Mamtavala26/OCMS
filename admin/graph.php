<?php
include "../ocms.php";
?>
<html>
  <head>
    <link rel="icon" href="../images/logo1.PNG" />
  <link href="..\css\cart.css" rel="stylesheet">
  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['gas_name', 'quantity'],
          <?php
          $sql = "SELECT * FROM add_stock";
          $fire = mysqli_query($con,$sql);

          while ($result = mysqli_fetch_assoc($fire)){
              echo "['".$result['gas_name']."',".$result['quantity']."],";
          }
          ?>
        ]);

        var options = {
          title: 'Available Quantity'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
  <header>
	<div id="header">
		<!-- <img src="img/logo.jpg"> -->
		<label>Oxygen</label>
    
	</div>
</header>
<br>
<br>
<br>
<!-- <h1 style="text-align:center"> Graph </h1> -->
    <form style="text-align:center; margin:auto;width:1150px" >
      <h1 style="text-align:center"> Graph </h1>
      <div id="piechart" style="width: 1000px; height: 500px; text-align:center;"><h1 style="text-align:center"> Graph </h1></div>
      
    </form>
  </body>

<br>
<br>
<br>
<br>
</html>