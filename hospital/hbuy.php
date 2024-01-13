<?php include "../ocms.php"; ?>

<?php  
  $item_id = $_GET["id"];
  $quantity = $_GET["quantity"];
                          
  $query = "SELECT * FROM add_stock WHERE id=$item_id";  
  $result = mysqli_query($con, $query);  
  if(mysqli_num_rows($result) > 0)  
    {  
      $result = mysqli_fetch_array($result);
    }
?>  

<?php 
  if((isset($_POST['hospital-order'])))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $query = "INSERT INTO `horder` (`name`,`email`,`mobile`,`address`,`quantity`,`hid`) VALUES('$name','$email','$mobile','$address', $quantity,$item_id);";

    $run = mysqli_query($con, $query) or die("can not insert data into database." .mysqli_error($con));

    if($query) 
    {
      echo "order data inserted.";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="../images/logo1.PNG" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link href="css\style.css" rel="stylesheet"> -->
    <title>Payment</title>
  </head>
  <body>
    <br />
    <br />

  <div id="container1" >
    <div class="container" >
    <div class="row">
      
      <div class="col-md-6 offset-md-3"  style="background-color:Lavender;">
        <h2 style="text-align:center">Confirm Order</h2>
      <form method="POST">
      <div class="form-group">
         <label>Name:</label>
         <input class="form-control" type="text" name="name" placeholder="Enter Your Name" required>
       </div>
       <br>
       <div class="form-group">
         <label>Email:</label>
         <input class="form-control" type="email" name="email" placeholder="Enter Your Email" Required>
       </div>
       <br>
       <div class="form-group">
         <label>Mobile Number:</label>
         <input class="form-control" type="text" name="mobile" placeholder="Enter Your Mobile Number" Required>
       </div>
        <br>
        <div class="from-group">
        <label>Address:</label>
         <input class="form-control" type="text" name="address" placeholder="Enter Your address" required>
       </div>           
    
       <div class="form-group">
         <label>Price(per/cylinder):</label>
         <input class="form-control" type="text" name="price" value="<?php echo $result["price"]; ?>" placeholder="" required disabled>
       </div>
       <br>
       <div class="form-group">
         <label>Quantity:</label>
         <input class="form-control" type="number" name="quantity" value="<?php echo $quantity; ?>" placeholder="" Required disabled>
       </div>
       <br>
       <div class="form-group">
         <label>Total:</label>
         <input class="form-control" type="email" name="total" value="<?php echo $result["price"]*$quantity; ?>" placeholder="" Required disabled>
       </div>
       <br>
       <label>Mode of payment:</label>
       
       <input type="radio" id="cod" name="cod" value="Cash On Delivery" required ><label>Cash On Delivery</label>
       <br>
       <br><button type="submit" name="hospital-order" class="btn btn-success" style="background-color:SteelBlue;">Confirm Order</button>
       <br>
       <br />
     </form>

     </div>
     </div>
     </div>
     </div>

</body>
</html>


