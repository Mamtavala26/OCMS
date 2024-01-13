<?php
include "../ocms.php";
session_start();
if(!isset($_SESSION["os_id"])){
    header("location:oxygen_supplier_login.php");
}
?>
<?php
if(isset($_GET['upd']))
{
  $id = $_GET['upd'];
  $query = "SELECT * FROM add_stock";
  $run = mysqli_query($con,$query) or die("query failed");
  $row = mysqli_fetch_assoc($run);
 // echo $row['fullname'];
 // echo $row['email'];
}
?>
<?php
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

 
 $query = "UPDATE add_stock SET water_capacity = '$water_capacity' , working_pressure = '$working_pressure', oxygen_purity = '$oxygen_purity', gas_name = '$gas_name' , material = '$material' , country = '$country' , height = '$height' , gas_type = '$gas_type' , photos = '$image' , quantity = '$quantity' , price = '$price' WHERE id = $id";
 $run = mysqli_query($con,$query) or die("query failed".mysqli_error($con));
 if($run)
 {
   header("Location: oxygen_supplier.php");
 }
}
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" href="images/logo1.PNG"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="..\css\style.css" rel="stylesheet">
  </head>
  <body>
  <header>
	<div id="header">
		<!-- <img src="img/logo.jpg"> -->
		<label>Oxygen</label>
    <ul>
        <li><a href="oxygen_supplier.php">Home</a></li>
      </ul>
	</div>
</header>
  <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 style="text-align:center; color:white;">Edit Stock Details</h2>
      <form method="POST">
        
       <div class="form-group">
         <label>Water Capacity(Liters):</label>
         <input class="form-control" type="text" name="water_capacity" value="<?php echo $row['water_capacity']; ?>">
       </div>
       
       <div class="form-group">
         <label>Working Pressure(kgf/cm2):</label>
         <input class="form-control" type="text" name="working_pressure" value="<?php echo $row['working_pressure']; ?>"  >
       </div>
       
       <div class="form-group">
         <label>Oxygen Purity(%):</label>
         <input class="form-control" type="text" name="oxygen_purity" value="<?php echo $row['oxygen_purity']; ?>">
       </div>
       
       <div class="form-group">
         <label>Gas Name:</label>
         <input class="form-control" type="text" name="gas_name" value="<?php echo $row['gas_name']; ?>">
       </div>
       
       <div class="form-group">
         <label>Material:</label>
         <input class="form-control" type="text" name="material" value="<?php echo $row['material']; ?>">
       </div>
       <div class="form-group">
         <label>Country Of Origin:</label>
         <input class="form-control" type="text" name="country" value="<?php echo $row['country']; ?>">
       </div>
       <div class="form-group">
         <label>Cylinder Height:</label>
         <input class="form-control" type="text" name="height" value="<?php echo $row['height']; ?>">
       </div>
       <div class="form-group">
         <label>Gas Type:</label>
         <input class="form-control" type="text" name="gas_type" value="<?php echo $row['gas_type']; ?>">
       </div>

        <div class="form-group">
         <label>Cylinder Image:</label>
         <input class="form-control" type="file" name="photos" value="<?php echo $row['photos']; ?>">
       </div>
       <div class="form-group">
         <label>Oxygen Cylinder Quantity:</label>
         <input class="form-control" type="text" name="quantity" value="<?php echo $row['quantity']; ?>">
       </div>
       <div class="form-group">
         <label>Cylinder Price:</label>
         <input class="form-control" type="text" name="price" value="<?php echo $row['price']; ?>">
       </div>
       <br><button name="submit" class="btn btn-success">Submit</button>
       
     </form>
     </div>
     </div>
  </body>
</html>
<?php

include "../footer.php";
?>