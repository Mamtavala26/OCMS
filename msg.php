<?php
  include "ocms.php";
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile  = $_POST['mobile'];
    $msg = $_POST['msg'];
    
    $query = "INSERT INTO contact (name, email, mobile, msg) VALUES('$name','$email','$mobile','$msg')";
   
    $run = mysqli_query($con, $query);
 
    if($run)
    { 
      echo "Message sent Sucessful";
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
    <link rel="icon" href="images/logo1.PNG" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css\login.css" rel="stylesheet">
    <title>Feedback</title>
  </head>
  <body>
  <header>
  <!-- <div>
    <video autoplay muted loop id="myVideo">
      <source src="rain.mp4" type="video/mp4">
    </video>
  </div> -->
	<div id="header">
		
		<label>Oxygen</label>
			<!-- <ul>
				<li><a href="addcart.php" style="font-size: ">Viwe Cart</a></li>
			</ul> -->
	</div>
     </header>
  <div id="container1">
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <br>
        <h2 style="text-align:center; color:white;">Feedback</h2>
      <form method="POST" style="color:white;">
        
       <div class="form-group">
         <label>Name</label>
         <input class="form-control" type="text" name="name" placeholder="Enter Your Name" required>
       </div>
       
       <div class="form-group">
         <label>Email</label>
         <input class="form-control" type="email" name="email" placeholder="Enter Your Email" Required>
       </div>
       
       <div class="form-group">
         <label>Mobile</label>
         <input class="form-control" type="text" name="mobile" placeholder="Enter Your Number">
       </div>
       
       <div class="form-group">
         <label>Message:</label>
         <textarea class="form-control" type="text" name="msg" rows="5" cols="55"></textarea> 
       </div>
       <br>
       <button type="submit" name="submit" class="btn btn-success"></button>

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
<br>
<br>
<br>
<br>
<br>
<br>
</html>
<?php
include "footer.php";
?>