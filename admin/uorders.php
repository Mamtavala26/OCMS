<?php 
  include "../ocms.php";
?>
<?php 
if(isset($_GET['del']))
{
    $id = $_GET['del'];
    $query = "DELETE FROM uorders WHERE id= $id";
    $run = mysqli_query($con,$query) or die("query faild");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Orders</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logo1.PNG"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>

    #header
    {
    height:70px;
    width:100%;
    /* background-color:#111; */
    color:black;
    text-indent:10px;
    -webkit-box-shadow:0px 0px 10px 0px black;
    -moz-box-shadow:0px 0px 10px 0px black;
    box-shadow:0px 0px 10px 0px black;
    }

    #header label
    {
    position: relative;
    top:15px;
    color:black;
    /* text-indent:50px; */
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
  </style>
</head>
<body>
<header>
	<div id="header">
		<label>Oxygen</label>
    <ul>
        <li><a href="oxygen_supplier.php" style="color: black;">Home</a></li>
    </ul>
	</div>
</header>
<div class="container mt-3">
  <h2 style="font-size:30px;" align="center">User Orders</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Ordered Name</th>
        <th>Ordered Mobile No.</th>
        <th>Ordered Address</th>
        <th>Gas Name</th>
        <th>Gas Type</th> 
        <th>Price</th>
        <th>Metarial</th>
        <th>Images</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        // $query = "SELECT * FROM add_stock";
        $query = "SELECT a.*,u.name AS Name ,u.mobile AS Mobile ,u.address AS Address FROM add_stock a,uorders u WHERE a.id = u.oid ";
        $run = mysqli_query($con, $query);

        if(mysqli_num_rows($run) > 0)
        { 
            foreach($run as $result)
            {
                ?>
                <tr>
                    <td><?= $result['Name'] ?></td>
                    <td><?= $result['Mobile'] ?></td>
                    <td><?= $result['Address'] ?></td>
                    <td><?= $result['gas_name'] ?></td>
                    <td><?= $result['gas_type'] ?></td>
                    <td><?= $result['price'] ?></td>
                    <td><?= $result['material'] ?></td>
                    <td><img class='img-polaroid' src="../photo/<?php echo $result["photos"]; ?>"height = '100px' width = '100px'/></td>
                    <td><a class="btn btn-danger" href="<?php $_SERVER['PHP_SELF']?>?del=<?php echo $result['id'] ?>">Delete</a></td>
                </tr>
                <?php
            }           
            
        }
        else{
            ?>
            <tr>
                 <td colspan="9" style="font-size:30px;" align="center">No Record Found</td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
    </div>
</body>

</html>