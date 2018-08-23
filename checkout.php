<?php 
session_start();
require('storescripts/connect_to_mysql.php');
$db = mysqli_select_db($connection, "ecommerce");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Checkout</title>
<link id="callCss" rel="stylesheet" href="style/bootstrap.min.css" media="screen"/>
<link href="style/bootstrap-responsive.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="style/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css"/>
<script type="text/javascript" src="storescripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="storescripts/jquery.leanModal.min.js"></script>
<script type="text/javascript" src="storescripts/dropdown.js"></script>
<script type="text/javascript" src="storescripts/bootstrap.min.js"></script>
</head>

<body background="style/points_cubes_background_light_91691_1920x1080.jpg">

<?php include_once("template_header.php");?>

<div class="container wrapper">
            <div class="row cart-head">
                <div class="container">
                <div class="stepwizard" style="left:80px;">
    				<div class="stepwizard-row">
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-default btn-circle"><a href="cart.php">1</a></button>
                            <p>Cart</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-primary btn-circle" style="background: #8B8B8B;background: linear-gradient(top, #404457, #1C1F26);background: -ms-linear-gradient(top, #404457, #1C1F26);background: -webkit-gradient(linear, left top, left bottom, from(#404457), to(#1C1F26));background: -moz-linear-gradient(top, #404457, #1C1F26);color:#fff;">2</button>
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
            </div>    
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="" >
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info" style="background-color: rgba(220, 220, 259, 0.7);border:none;">
                        <div class="panel-heading" style="background: #8B8B8B;background: linear-gradient(top, #404457, #1C1F26);background: -ms-linear-gradient(top, #404457, #1C1F26);background: -webkit-gradient(linear, left top, left bottom, from(#404457), to(#1C1F26));background: -moz-linear-gradient(top, #404457, #1C1F26);color:#fff;">
                            Review Order <div class="pull-right"><small><a class="afix-1" href="cart.php">Edit Cart</a></small></div>
                        </div>
                        <div class="panel-body">
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
							echo "<div class='form-group'>";
							echo "<div class='col-sm-3 col-xs-3'>";
							echo "<img class='img-responsive' src='//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg' />";
							echo "</div>";
							echo "<div class='col-sm-6 col-xs-6'>";
							echo "<div class='col-xs-12'>{$name}</div>";
							echo "<div class='col-xs-12'><small>Quantity:<span>{$quantity}</span></small></div>";
							echo "</div>";
							echo "<div class='col-sm-3 col-xs-3 text-right'>";
							echo "<h6><span>Rs.</span>{$price}</h6>";
							echo "</div>";
							echo "</div>";}?> 
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Subtotal</strong>
                                    <div class="pull-right"><span>Rs.</span><span><?php echo "$total"?></span></div>
                                </div>
                                <div class="col-xs-12">
                                    <small>Shipping</small>
                                    <div class="pull-right"><span>-</span></div>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span>Rs.</span><span><?php echo "$total"?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info" style="background-color: rgba(220, 220, 259, 0.7);border:none;">
                        <div class="panel-heading" style="background: #8B8B8B;background: linear-gradient(top, #404457, #1C1F26);background: -ms-linear-gradient(top, #404457, #1C1F26);background: -webkit-gradient(linear, left top, left bottom, from(#404457), to(#1C1F26));background: -moz-linear-gradient(top, #404457, #1C1F26);color:#fff;">Address</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>Shipping Address</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Country:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="country" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>First Name:</strong>
                                    <input type="text" name="first_name" class="form-control" value="" />
                                </div>
                                <div class="span1"></div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Last Name:</strong>
                                    <input type="text" name="last_name" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Address:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>City:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="city" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>State:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="state" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="zip_code" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Phone Number:</strong></div>
                                <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email Address:</strong></div>
                                <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="" /></div>
                            </div>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                    <!--CREDIT CART PAYMENT-->
                    <div class="panel panel-info" style="background-color: rgba(220, 220, 259, 0.7);border:none;">
                        <div class="panel-heading" style="background: #8B8B8B;background: linear-gradient(top, #404457, #1C1F26);background: -ms-linear-gradient(top, #404457, #1C1F26);background: -webkit-gradient(linear, left top, left bottom, from(#404457), to(#1C1F26));background: -moz-linear-gradient(top, #404457, #1C1F26);color:#fff;"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12"><strong>Card Type:</strong></div>
                                <div class="col-md-12">
                                    <select id="CreditCardType" name="CreditCardType" class="form-control">
                                        <option value="5">Visa</option>
                                        <option value="6">MasterCard</option>
                                        <option value="7">American Express</option>
                                        <option value="8">Discover</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Card CVV:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <strong>Expiration Date</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Month</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Year</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span>Pay secure using your credit card.</span>
                                </div>
                                <div class="col-md-12">
                                    <ul class="cards">
                                        <li class="visa hand">Visa</li>
                                        <li class="mastercard hand">MasterCard</li>
                                        <li class="amex hand">Amex</li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CREDIT CART PAYMENT END-->
                </div>
                
                </form>
            </div>
            <div class="row cart-footer">
        
            </div>
    </div>

<?php include_once("template_footer.php");?>
</body>
</html>