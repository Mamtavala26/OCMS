<?php
include "../ocms.php";
session_start();
if(!isset($_SESSION["hospital_id"])){
	header("location:hospital_login.php");
}

    $id = $_SESSION['hospital_id'];
	// echo $id;
    $query = "SELECT * FROM hospital_register WHERE id=$id";
    $run = mysqli_query($con,$query) or die("query faild");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="icon" href="../images/logo1.PNG" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
<header>
	
<div id="header">
		<!-- <img src="img/logo.jpg"> -->
		<label>Oxygen</label>
			<ul>
				<li><a href="logout.php">Logout</a></li>
				<!-- <li><a href="feedback.php">Feedback</a></li> -->
				<li><a href="h_profile.php?upd=<?php echo $id; ?>">Profile</a></li>
				<li><a href="../admin/graph.php">Graph</a></li>
				<li><a href="hospital-view-orders.php">Your Orders</a></li>
				<li><a href="hospital-view-stock.php">View Oxygen Cylinders</a></li>
			</ul>
	</div>
	<?php
		$id = (int)$_SESSION['hospital_id'];
		$query = $con->query ("SELECT * FROM hospital_register WHERE id = '$id' ") or die (mysqli_error($con));
		$fetch = $query->fetch_array();
	?>
	<main>
		<section>
			<h1>WELCOME!!   <?php echo $fetch['name']; ?></h1>
		</section>
	</main>


</header>

</body>
</html>
<?php 
include "../footer.php";
?>