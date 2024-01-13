<!doctype html>
<html lang="en">
  <head>
    <style>
       /**{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: "Josefin Sans", sans-serif;
        }

        body{
          width: 100%;
          height: 100vh;
          background-repeat: no-repeat;
          background-size: cover;
          }

        #header
        {
          height:70px;
          width:100%;
          /* background-color:#111; 
          background-color:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15));
          text-indent:10px;
          -webkit-box-shadow:0px 0px 10px 0px black;
          -moz-box-shadow:0px 0px 10px 0px black;
          box-shadow:0px 0px 10px 0px black;
        }

        #header label
        {
          position:relative;
          top:15px;
          color:rgb(3, 3, 3);
          text-indent:80px;
          font-size:30px;
          clear:both;
          font-family:arial;
        }
        #header ul
        {
          list-style-type:none;
          position:relative;
          top: -13px;
        }

        #header ul li
        {
          display:inline;
          position:relative;
          float:right;
          margin-right:20px;
        }

        #header ul li a
        {
          top: 5px;
          text-decoration:none;
          color:#fff;
        }

        #header ul li a:hover
        {
          color:rgb(111, 172, 241);
        }
  #footer
  {
    position:relative;
    color:rgb(0, 0, 0);
    width:100%;
    height:70px;
    clear:both;
    background:linear-gradient(#e5a8ca ,rgb(219, 96, 168));
    background:-moz-linear-gradient(#ec2191 ,rgb(247, 144, 204));
    background:-webkit-linear-gradient(#ec2191 ,rgb(219, 96, 168));
    -webkit-box-shadow:0px 0px 20px 0px black;
    -moz-box-shadow:0px 0px 20px 0px black;
    box-shadow:0px 0px 20px 0px black;
    border-top:1px solid black;
  }
*/
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="icon" href="../images/logo1.PNG"/>
    <link href="..\css\cart.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/cart.css"> -->
    <title>OC Stock</title>
  </head>
  <body>
<?php
 include "../ocms.php";
 $query = "SELECT * FROM add_stock";
 $run = mysqli_query($con, $query);
 //$total = mysqli_num_rows($run);
 //echo $total;
 
 if (mysqli_num_rows($run) > 0)
 {
?>
<header>
	<div id="header">
		<label>Oxygen</label>
    <ul>
        <li><a href="user.php">Home</a></li>
    </ul>
	</div>
</header>
<br>
<h5 style="text-align:center; 
  font-size: 20px;
  font-weight: 700;"> Oxygen Cylinder Stock</h5>
<br>
<table class="table table-bordered">
    <thead>    
      <tr>
          <!-- <th>id</th> -->
          <th>Water Capacity</th>
          <th>Working Pressure</th>
          <th>Oxygen Purity</th>
          <th>Gas Name</th>
          <th>Material</th>
          <th>Country</th>
          <th>Height</th>
          <th>Gas Type</th>
          <th>Image</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Buy</th>
          <th>Contact Us</th>
      </tr>
    </thead>
<tbody>
    <?php
    while ($row = mysqli_fetch_assoc($run))
    {
    ?>
    <tr class="table-danger" >
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
        <td><a class="btn btn-success" href="cart.php">Buy</a><i class="fas fa-edit"></i></td>
        <td><a href="../msg.php"><button>Contact Us</a><i class="fas fa-edit"></i></button></td>
    </tr>
    <?php 
    }
    ?>
 </tbody>
 </table>
 
<?php 
    }
    ?>
<br>
<br>


<!--   <div id="footer">
		<div class="foot">
			<label style="font-size:15px; "> Copyright &copy; Oxyegen Cylinder Store. All Rights Reserved. </label>
			<p style="font-size:20px;">Developed by: Mamta Vala</p> 
		</div>
	</div> -->
  </body>
</html>
<?php
include "../footer.php";
?>