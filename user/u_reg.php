<?php
  include "../ocms.php";
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile  = $_POST['mobile'];
    $address = $_POST['address'];
    $pin  = $_POST['pin'];
    $password = $_POST['password'];
    $query = "INSERT INTO register (name, email, mobile, address, pin, password) VALUES('$name','$email','$mobile','$address','$pin', '$password')";

    $run = mysqli_query($con, $query);
    if($run)
    { 
      echo "User Account Created";
    }
    
  }
?>
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="../images/logo1.PNG"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <title>Register</title>
  </head>
  <body>

  

  <header>
	
  <div id="header">
		<!-- <img src="images/logo.jpg"> -->
		<label>Oxygen</label>
			<ul>
				<li><a href="../admin/oxygen_supplier_login.php">Oxygen Supplire</a></li>
				<li><a href="../hospital/hospital_login.php">Hospital</a></li>
				<li><a href="user_login.php" data-toggle="modal">User</a></li>
				<li><a href="../home.php" >Home</a></li>
			</ul>
	</div>

    </header>
    <div id="container">
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 style="text-align:center; color:white">User Register</h2>
      <form method="POST" >
        
       <div class="form-group">
         <label>Name: </label>
         <input class="form-control" type="text" name="name" placeholder="Enter Your Name" required>
       </div>
       
       <div class="form-group">
         <label>Email: </label>
         <input class="form-control" type="email" name="email" placeholder="Enter Your Email" Required>
       </div>
       
       <div class="form-group">
         <label>Mobile: </label>
         <input class="form-control" type="text" name="mobile" placeholder="Enter Your Number" required="">
       </div>
       
       <div class="form-group">
         <label>Address: </label>
         <input class="form-control" type="text" name="address" placeholder="Enter Your Address" required="">
       </div>

       <div class="form-group">
         <label>Pin Code: </label>
         <input class="form-control" type="text" name="pin" placeholder="Enter Your Pin Code" required="">
       </div>

       <div class="form-group">
         <label>Password: </label>
         <input class="form-control" type="password" name="password" placeholder="Enter Your Password" required="">
       </div>
       
       <button type="submit" name="submit" class="btn btn-success">Register</button>
       <a> Already have an account? </a>
       <a href="user_login.php">Login here</a>
       
     </form>
     </div>
     </div>
     </div>
     </div>
  </body>
<br>
<br>
<br>
<br>
<br>


</html>

<?php
include "../footer.php";
?>