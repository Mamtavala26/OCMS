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
      echo "Your Feedback sent Sucessful";
    }
  
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="icon" href="images/logo1.PNG"/>
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style2.css">

    <title>Contact Form #10</title>
  </head>
  <body>
  <header>
	<div id="header">
		<!-- <img src="images/logo.jpg"> -->
		<label>Oxygen</label>
			<!-- <ul>
				<li><a href="addcart.php" style="font-size: ">Viwe Cart</a></li>
			</ul> -->
	</div>
     </header>
  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <!-- <h3 class="text-center">Let's Talk</h3> -->
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
            <h3 class="text-center"> Feedback </h3>
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your email">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Name *</label>
                  <input type="text" class="form-control" name="name" id="name"  placeholder="Your name">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Mobile *</label>
                  <input type="mobile" class="form-control" name="mobile" id="mobile" placeholder="Your mobile">
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Message *</label>
                  <textarea class="form-control" name="msg" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                  <input type="submit" name="submit" value="Send Message" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>



          </div>
        </div>
      </div>
    </div>

  </div>
    
  
  </body>

</html>
<?php
include "footer.php";
?>