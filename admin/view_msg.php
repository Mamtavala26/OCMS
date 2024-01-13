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

 <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="images/logo1.PNG"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="..\css\cart.css" rel="stylesheet">
    <title>Messages</title>
  </head>
  <body>
  <header>
	<div id="header">
		<!-- <img src="img/logo.jpg"> -->
		<label>Oxygen</label>
      <ul>
        <li><a href="oxygen_supplier.php">Home</a></li>
      </ul>
	</div>
</header>
<?php 

include "../ocms.php";
if(isset($_GET['del']))
{
    $id = $_GET['del'];
    $query = "DELETE FROM contact WHERE id= $id";
    $run = mysqli_query($con,$query) or die("query faild");
}

?>
<?php
 include "../ocms.php";
 $query = "SELECT * FROM contact";
 $run = mysqli_query($con, $query);
 //$total = mysqli_num_rows($run);
 //echo $total;
 
 if (mysqli_num_rows($run) > 0)
 {

?>

<form>
<table class="table table-bordered">
<br>
<h4 align="center">Messages</h4>
<thead>
        
    <tr>
                        <!-- <th>id</th> -->
                        <th  width="20%">Name</th>
                        <th  width="20%">Email</th>
                        <th  width="10%">Mobile Number</th>
                        <th  width="40%">Message</th>
                        <th  width="10%">Delete</th>
                        </tr>
 </thead>
<tbody>
    <?php
    while ($row = mysqli_fetch_assoc($run))
    {
    ?>
    <tr class="table-danger" >
        
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['mobile'] ?></td>
        <td Style="height:100px; width:100"><?php echo $row['msg'] ?></td>
        <td><a class="btn btn-danger" href="<?php $_SERVER['PHP_SELF']?>?del=<?php echo $row['id'] ?>">Delete</a></td>
    </tr>
    <?php 
    }
    ?>
 </tbody>

 </table>
</form>
<?php 
    }
    ?>
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