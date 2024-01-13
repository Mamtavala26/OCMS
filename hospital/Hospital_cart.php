<?php   
include "../ocms.php";
session_start();
if(!isset($_SESSION["hospital_id"])){
     header("location:hospital_login.php");
}
 if(isset($_POST["add-cart"]))  
 {  
      if(isset($_SESSION["hospital_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["hospital_cart"], "h_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["hospital_cart"]);  
                $item_array = array(  
                    'h_id' => $_GET["id"],  
                    'gas_name' => $_POST["gas_name"],  
                    'price' => $_POST["price"],  
                    'quantity' => $_POST["quantity"]  
               );  
                $_SESSION["hospital_cart"][$count] = $item_array;  
           }  
           else  
           {  
               //echo "Oxygen Cylinder Already Added";
               // echo "Location:cart.php";

           }  
      }  
      else  
      {  
           $item_array = array(  
                'h_id' => $_GET["id"],  
                'gas_name' => $_POST["gas_name"],  
                'price' => $_POST["price"],  
                'quantity' => $_POST["quantity"]  
           );  
           $_SESSION["hospital_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["hospital_cart"] as $keys => $values)  
           {  
                if($values["h_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["hospital_cart"][$keys]);  
                     echo "Oxygen Cylinder Removed";
                    //  echo "Location:cart.php";
                    //  echo '<script>alert("Item Removed")</script>';  
                    //  echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Shopping Cart</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <!-- <link rel="stylesheet" href="css/bootstrap.min.css" />  -->
           <link rel="icon" href="../images/logo1.PNG" />
           <script src="../js/bootstrap.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <style>
               #header
               {
               height:80px;
               width:100%;
               background-color:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15));
               text-indent:10px;
               -webkit-box-shadow:0px 0px 10px 0px black;
               -moz-box-shadow:0px 0px 10px 0px black;
               box-shadow:0px 0px 5px 0px black;
               }

               #header label
               {
               position:relative;
               top:15px;
               color:#fff;
               text-indent:10px;
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
		<label style="color:black;">Oxygen</label>
          <ul>
               <li><a href="hospital.php" style="color: black;">Home</a></li>
          </ul>
	</div>
     </header>
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Shopping Cart</h3><br />  
                <?php  
                $query = "SELECT * FROM add_stock ORDER BY id ASC";  
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="Hospital_cart.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:10px; padding:16px;" align="center">  
                               <img class='img-polaroid' src="../photo/<?php echo $row["photos"]; ?>"height = '100px' width = '100px'/><br />  
                               <h4 class="text-info"><?php echo $row["gas_name"]; ?></h4>  
                               <h4 class="text-danger">RS. <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="gas_name" value="<?php echo $row["gas_name"]; ?>" />  
                               <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add-cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="form-group">
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="30%">Gas Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="15%">Buy Now</th>  
                               <th width="10%">Remove</th>
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["hospital_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["hospital_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["gas_name"]; ?></td>  
                               <td><?php echo $values["quantity"]; ?></td>  
                               <td>RS. <?php echo $values["price"]; ?></td>  
                               <td>RS. <?php echo number_format($values["quantity"] * $values["price"], 2); ?></td>
                               <td style="text-align:center;";><a class="btn btn-success" href="hbuy.php?id=<?php echo $values["h_id"]; ?>&quantity=<?php echo $values["quantity"]; ?>">buy</a></td>
                               <td><a href="Hospitalcart.php?action=delete&id=<?php echo $values["h_id"]; ?>"><span class="text-danger">Remove</span></a></td>                                 
                          </tr>  
                          <?php  
                                    $total = $total + ($values["quantity"] * $values["price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">RS. <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>
               </div>  
           </div>  
           <br />  
      </body>  
 </html>