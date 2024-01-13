<?php
include "../ocms.php";
session_start();
if(!isset($_SESSION["os_id"])){
    header("location:oxygen_supplier_login.php");
}
?>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile  = $_POST['mobile'];
    $address = $_POST['address'];
    $password = $_POST['password'];
	
	$query = "UPDATE os_register SET name = '$name', email = '$email', mobile = '$mobile', address = '$address', password = '$password' WHERE id = '$id'";
	$run = mysqli_query($con,$query) or die("query failed".mysqli_error($con));
	if($run)
	{
	header("Location: oxygen_supplier_login.php");
	}
}
?>

<?php
session_start();
if(!isset($_SESSION["os_id"])){
	header("Location:oxygen_supplier.php");
}

    $id = $_SESSION['os_id'];
    $query = "SELECT * FROM os_register WHERE id= $id";
    $run = mysqli_query($con,$query) or die("query faild");
	$row = mysqli_fetch_assoc($run);

?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="..\css\style.css" rel="stylesheet">
	</head>
	<body>
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h2 style="text-align:center; color:white">Profile Information</h2>
			
		<form method="POST">
			
		<div class="form-group">
			<label>Name:</label>
			<input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>">
		</div>
		
		<div class="form-group">
			<label>Email:</label>
			<input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>">
		</div>
		
		<div class="form-group">
			<label>Mobile:</label>
			<input class="form-control" type="text" name="mobile" value="<?php echo $row['mobile']; ?>">
		</div>
		
		<div class="form-group">
			<label>Address:</label>
			<input class="form-control" type="text" name="address" value="<?php echo $row['address']; ?>">
		</div>
		

		<div class="form-group">
			<label>Password:</label>
			<input class="form-control" type="text" name="password" value="<?php echo $row['password']; ?>">
		</div>
        
        <br><button name="submit" class="btn btn-success">Done</button>
	</div>
		
		
		</form>
		</div>
		</div>
	</body>
</html>

<?php 
include "../footer.php";
?>