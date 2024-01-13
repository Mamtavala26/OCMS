<?php
  include "../ocms.php";
  if(isset($_POST['submit']))
  {
    $water_capacity = $_POST['water_capacity'];
    $working_pressure = $_POST['working_pressure'];
    $oxygen_purity  = $_POST['oxygen_purity'];
    $gas_name = $_POST['gas_name'];
    $material = $_POST['material'];
    $country = $_POST['country'];
    $height = $_POST['height'];
    $gas_type = $_POST['gas_type'];
    $image = $_POST['photos'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $query = "INSERT INTO `add_stock`(`water_capacity`, `working_pressure`, `oxygen_purity`, `gas_name`, `material`, `country`, `height`, `gas_type`, `photos`, `quantity`, `price`) VALUES('$water_capacity','$working_pressure','$oxygen_purity','$gas_name','$material','$country','$height','$gas_type','$image','$quantity','$price')";
   
    $run = mysqli_query($con, $query);
 
    if($run)
    { 
      echo "Stock Add into database";
    }
  if (isset($_POST['upload'])){
    echo "Stock Uploded";
  }  
  }
?>
  


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="../images/logo1.PNG" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="..\css\cart.css" rel="stylesheet">
    <title>Oxygen</title>
  </head>
  <body>
  <header>
	<div id="header">
		<!-- <img src="images/logo.jpg"> -->
		<label>Oxygen</label>
			<ul>
				<li><a href="oxygen_supplier.php">Home</a></li>
			</ul>
	</div>

  </header>
    <div id="container1">
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
       <br>
       <br>
      <form method="POST">
         <h2 style="text-align:center">Add Stock</h2>
       <div class="form-group">
         <label>Water Capacity(Liters):</label>
         <input class="form-control" type="text" name="water_capacity" placeholder="Enter Water Capacity" required="">
       </div>
       
       <div class="form-group">
         <label>Working Pressure(kgf/cm2):</label>
         <input class="form-control" type="text" name="working_pressure" placeholder="Working Pressure" required="">
       </div>
       
       <div class="form-group">
         <label>Oxygen Purity(%):</label>
         <input class="form-control" type="text" name="oxygen_purity" placeholder="Enter Oxygen Purity" required="">
       </div>
       
       <div class="form-group">
         <label>Gas Name:</label>
         <input class="form-control" type="text" name="gas_name" placeholder="Enter Gas Name" required="">
       </div>
       
       <div class="form-group">
         <label>Material:</label>
         <input class="form-control" type="text" name="material" placeholder="Enter Material" required="">
       </div>
       <div class="form-group">
         <label>Country Of Origin:</label>
         <input class="form-control" type="text" name="country" placeholder="Enter Country Of Origin" required="">
       </div>
       <div class="form-group">
         <label>Cylinder Height:</label>
         <input class="form-control" type="text" name="height" placeholder="Enter Cylinder Height" required="">
       </div>
       <div class="form-group">
         <label>Gas Type:</label>
         <input class="form-control" type="text" name="gas_type" placeholder="Enter Gas Type" required="">
       </div>

       <!-- <from action = "?" method = "POST">
         <label> Upload Image </lable>
         <p><input Type="file" name= "file"/></p>
         <p><input Type="submit" name= "upload" value= "Upload Image"></p>
        </from>-->
        <!--<div class="form-group">-->
        Cylinder Image:<input class="form-control" type="file" name="photos" placeholder="Enter Cylinder Image" required=""> 
       <!-- <button type="submit" name="submit1" value="Upload"></button>-->
       <div class="form-group">
         <label>Oxygen Cylinder Quantity:</label>
         <input class="form-control" type="text" name="quantity" placeholder="Enter Oxygen Cylinder Quantity" required="">
       </div>
       <div class="form-group">
         <label>Cylinder Price:</label>
         <input class="form-control" type="text" name="price" placeholder="Enter Cylinder Price" required="">
       </div>
       <br><button name="submit" class="btn btn-success">Add</button>
       
     </form>
     </div>
     </div>
     </div>
     </div>
  </body>
</html>