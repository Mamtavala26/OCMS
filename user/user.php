<?php
include "../ocms.php";
session_start();
if(!isset($_SESSION["user_id"])){
	header("location:user_login.php");
}

    $id = $_SESSION['user_id'];
	// echo $id;
    $query = "SELECT * FROM register WHERE id=$id";
    $run = mysqli_query($con,$query) or die("query faild");
?>
		
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="icon" href="../images/logo1.PNG"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header>
	<div id="header">
		<!-- <img src="img/logo.jpg"> -->
		<label>Oxygen</label>
			<ul>
				<li><a href="logout.php">Logout</a></li>
				<li><a href="u_profile.php?upd=<?php echo $id; ?>">Profile</a></li>
				<li><a href="../admin/graph.php">Graph</a></li>
				<li><a href="user-view-orders.php">Your Orders</a></li>
				<li><a href="view_stock.php">View Oxygen Cylinders</a></li>
			</ul>
	</div>

	<?php
		$id = (int)$_SESSION['user_id'];
		$query = $con->query ("SELECT * FROM register WHERE id = '$id' ") or die (mysqli_error($con));
		$fetch = $query->fetch_array();
	?>

	<main>
		<section>
			<h1>WELCOME!!   "<?php echo $fetch['name']; ?>"</h1>
		</section>
	</main>
</header>

</body>
</html>


<?php 
include("../footer.php");  
?>