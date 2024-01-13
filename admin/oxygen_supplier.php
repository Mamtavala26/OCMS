<?php
include "../ocms.php";
session_start();
if(!isset($_SESSION["os_id"])){
    header("location:oxygen_supplier_login.php");
}

    $id = $_SESSION['os_id'];
    // echo $id;
    $query = "SELECT * FROM os_register WHERE id=$id";
    $run = mysqli_query($con,$query) or die("query faild");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
				<!-- <li><a href="os_profile.php?upd=<?php echo $id; ?>">Profile</a></li> -->
				<li><a href="view_msg.php">Messages</a></li>
				<li><a href="horders.php">View Hospital Oders</a></li>
				<li><a href="uorders.php">View Users Oders</a></li>
                <li><a href="Add-stock.php">Add Stock</a></li>
			</ul>
	</div>
    <main>
        <section>
            <h1>WELCOME!!</h1>
        </section>
    </main>


</header>
<?php

include "../ocms.php";
if(isset($_GET['del']))
{
    $id = $_GET['del'];
    $query = "DELETE FROM add_stock WHERE id= $id";
    $run = mysqli_query($con,$query) or die("query faild");
}
?>
<?php
 include "../ocms.php";

 $query = "SELECT * FROM add_stock";
 $run = mysqli_query($con, $query);
 //$total = mysqli_num_rows($run);
 //echo $total;
 
 if (mysqli_num_rows($run) > 0)
 {

?>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br>
<br>

<h5 style="text-align:center; font-size: 30px bold;" >Oxygen Cylinder Stock Update nd Delete </h5>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>water capacity</th>
            <th>working pressure</th>
            <th>oxygen purity</th>
            <th>gas name</th>
            <th>material</th>
            <th>country</th>
            <th>height</th>
            <th>gas type</th>
            <th>photos</th>
            <th>quantity</th>
            <th>price</th>
            <th>Action</th>
        </tr>
    </thead>
<tbody>
    <?php
    while ($row = mysqli_fetch_assoc($run))
    {
    ?>
    <tr class="table-danger" >
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['water_capacity'] ?></td>
        <td><?php echo $row['working_pressure'] ?></td>
        <td><?php echo $row['oxygen_purity'] ?></td>
        <td><?php echo $row['gas_name'] ?></td>
        <td><?php echo $row['material'] ?></td>
        <td><?php echo $row['country'] ?></td>
        <td><?php echo $row['height'] ?></td>
        <td><?php echo $row['gas_type'] ?></td>
        <td><img class='img-polaroid' src="../photo/<?php echo $row["photos"]; ?>"height = '100px' width = '100px'/></td>
        <td><?php echo $row['quantity'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <!--<td><button type="button" class="btn btn-success"><a href="update.php">Edit</a><i class="fas fa-edit"></i></button>-->
        <td><a class="btn btn-success" href="update.php?upd=<?php echo $row['id'] ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="<?php $_SERVER['PHP_SELF']?>?del=<?php echo $row['id'] ?>">Delete</a></td>
        <!--<button type="button" class="btn btn-danger"><a href="delete.php">Delete</a><i class="glyphicon glyphicon-trash"></i></button></td> -->
    </tr>
    
    <?php 
    }
    ?>
 </tbody>

 </table>
 <?php 
    }
    ?>
</body>
</html>

<?php
include "../footer.php";
?>