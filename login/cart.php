<?php 
session_start();
require('storescripts/connect_to_mysql.php');
$db = mysqli_select_db($connection, "ecommerce");
$action = isset($_GET['action']) ? $_GET['action'] : "";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cart</title>
<link id="callCss" rel="stylesheet" href="style/bootstrap.min.css" media="screen"/>
<link href="style/bootstrap-responsive.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css"/>
<script type="text/javascript" src="storescripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="storescripts/jquery.leanModal.min.js"></script>
<script type="text/javascript" src="storescripts/dropdown.js"></script>
<script type="text/javascript" src="storescripts/bootstrap.min.js"></script>
</head>

<body background="style/points_cubes_background_light_91691_1920x1080.jpg">

<?php include_once("template_header.php");?>
<div class="container wrapper">
<div class="container">
                <div class="stepwizard" style="left:80px;">
    				<div class="stepwizard-row">
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-primary btn-circle" style="background: #8B8B8B;background: linear-gradient(top, #404457, #1C1F26);background: -ms-linear-gradient(top, #404457, #1C1F26);background: -webkit-gradient(linear, left top, left bottom, from(#404457), to(#1C1F26));background: -moz-linear-gradient(top, #404457, #1C1F26);color:#fff;" >1</button>
                            <p>Cart</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-default btn-circle" disabled="disabled">2</button>
                            <p>Shipping</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-default btn-circle" disabled="disabled">3</button>
                            <p>Payment</p>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <p></p>
                </div>
                </div>
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead style="background: #8B8B8B;background: linear-gradient(top, #404457, #1C1F26);background: -ms-linear-gradient(top, #404457, #1C1F26);background: -webkit-gradient(linear, left top, left bottom, from(#404457), to(#1C1F26));background: -moz-linear-gradient(top, #404457, #1C1F26);color:#fff;">
						<tr >
							<th style="width:50%;color:#fff;">Product</th>
							<th style="width:10%;color:#fff;"">Price</th>
							<th style="width:8%;color:#fff;"">Quantity</th>
							<th style="width:22%;color:#fff;"" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody >
						<?php $currentuser=get_current_user();
					 $query1 = mysqli_query($connection,"SELECT * FROM `cart_items` where `user_id` LIKE '1'" );
					 $total=0;
						while ($row1 = mysqli_fetch_array($query1)) {
							$cid=$row1['product_id'];
							$quantity=$row1['quantity'];
							$query2 = mysqli_query($connection,"select * from products where pid=$cid" );
							$row2 = mysqli_fetch_array($query2);
							$name=$row2['name'];
							$price=$row2['price'];
							
							$total=$total+$price*$quantity;
                            echo "<tr>";
							echo "<td data-th='Product' >";
							echo "<div class='row' style='margin:5px;'>";
							echo "<div class='col-sm-2 hidden-xs'><img src='http://placehold.it/100x100' alt='...' class='img-responsive'/></div>";
							echo "<div class='col-sm-10'>";
							echo "<h4 class='nomargin'>{$name}</h4>";
							echo "</div>";
							echo "</div>";
							echo "</td>";
							echo "<td data-th='Price'>Rs.{$price}</td>";
							echo "<td data-th='Quantity'>";
							echo "<input type='number' class='form-control text-center' value='{$quantity}' id='quant'>";
							echo "</td>";
							echo "<td data-th='Subtotal' class='text-center'>{$price}</td>";
							echo "<td class='actions' data-th=''>";
							echo "<a href='remove-from-cart.php?id={$cid}' class='btn btn-danger btn-sm'><i class='fa fa-trash-o'></i></a>";								
							echo "</td>";
							echo "</tr>";}?>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total <?php {$total;}?> </strong></td>
						</tr>
						<tr>
							<td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total Rs.<?php echo "$total";?></strong></td>
							<td><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>
</div>

<?php include_once("template_footer.php");?>
</body>
</html>