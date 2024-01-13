<?php
session_start();
 include "../ocms.php";

 if(isset($_POST['submit']))
 {
  $email =  $_POST['email'];
  $password =  $_POST['password'];
  
  $query = "SELECT id, email FROM hospital_register WHERE email = '$email' AND password = '$password'";
  
  $run = mysqli_query($con,$query) or die("query failed");
  
  if(mysqli_num_rows($run) > 0)
  {
    $row = mysqli_fetch_assoc($run);
    $_SESSION["hospital_id"] = $row["id"];
    header("location:hospital.php");
    
    // echo "Login Sucessful";
  }
  else 
  {
    echo "Login failed";
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
    <link href="..\css\style.css" rel="stylesheet">
    <title></title>
  </head>
  <body>

  

  <header>
	
  <div id="header">
		<!-- <img src="images/logo.jpg"> -->
		<label>Oxygen</label>
			<ul>
				<li><a href="../admin/oxygen_supplier_login.php">Oxygen Supplire</a></li>
				<li><a href="hospital_login.php">Hospital</a></li>
				<li><a href="../user/user_login.php">User</a></li>
				<li><a href="../home.php">Home</a></li>
			</ul>
	</div>
    
    </header>
  
      <div class="col-md-6 offset-md-3">
        <br><h2 style="text-align:center; color:white">Hospital Login</h2>
      <form method="POST" >
        
       <div class="form-group">
         <label>Email:</label>
         <input class="form-control" type="email" name="email" placeholder="Enter Your Email" required="">
       </div>

       <div class="form-group">
         <label>Password:</label>
         <input class="form-control" type="password" name="password" placeholder="Enter Your Password" required="">
       </div>
       <br>
       <button type="submit" name="submit" class="btn btn-success">Login</button>
       
       <!-- <a href="change-password.php">Change Password? </a><br> -->
       <br>Don't have an account?<a class="ridge" href="h_reg.php">New Register here!</a>
     </form>
     </div>
  </body>
  <br>
  <br>
   <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</html>

<?php
include "../footer.php";
?>