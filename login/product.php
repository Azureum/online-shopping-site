<?php 
session_start();
require('storescripts/connect_to_mysql.php');
$db = mysqli_select_db($connection, "ecommerce");

$action = isset($_GET['action']) ? $_GET['action'] : "";
$pid = isset($_GET['id']) ? $_GET['id'] : "";
$name2= isset($_GET['name']) ? $_GET['name'] : "";
$price2= isset($_GET['price']) ? $_GET['price'] : "";
$query2 = mysqli_query($connection,"SELECT * from products WHERE pid='$pid'");
$row1 = mysqli_fetch_array($query2);
	$description=$row1['description'];
$query3=mysqli_query($connection,"SELECT `images_path` FROM  `upload_data` WHERE PROD_CODE='$pid'");
$row3 = mysqli_fetch_array($query3);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product</title>
<link id="callCss" rel="stylesheet" href="style/bootstrap.min.css" media="screen"/>
<link href="style/bootstrap-responsive.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css"/>
<script type="text/javascript" src="storescripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="storescripts/jquery.leanModal.min.js"></script>
<script type="text/javascript" src="js/productslider.js"></script>
<script type="text/javascript" src="storescripts/bootstrap.min.js"></script>
</head>

<body background="style/points_cubes_background_light_91691_1920x1080.jpg">
<?php include_once("template_header.php");?>
<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">	
				<div class="col-md-5">
                    <img src="<?php echo $row3['images_path'];?>" alt="" style="max-height:400px;max-width:400px;"/>
                    </div>


					
				<div class="col-md-7">
					<div id="name" class="product-title"><?php  echo "$name2"; ?></div>
                    <input id="namehid" type="hidden" value="<?php  echo "$name2"; ?>">
					<div class="product-desc"></div>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<hr>
                    
					<div class="product-price">Rs.<?php echo "$price2"; ?></div>
                    <input id="pricehid" type="hidden" value="<?php  echo "$price2"; ?>">
                    <div >Quantity:<input style="width: 10%;" type='number' class='form-control text-center' value='1' id="quant"></div>
					<div class="product-stock">In Stock</div>
					<hr>
					<div class="btn-group cart">
						<button type="button" class="btn btn-success add-to-cart" onclick="myFunction()">
							Add to cart
                            
  
						</button>
                        
					</div>
					<div class="btn-group wishlist">
						<button type="button" class="btn btn-danger" onclick="myFunction()" >
							<a href="checkout.php" target="_blank">Buy Now</a> 
						</button>
					</div>
                    <?php if($action=='added'){
								echo "<div class='alert alert-info'>";
									echo "<strong>{$name2}</strong> added to your cart!";
								echo "</div>";
							}
							 
							else if($action=='failed'){
								echo "<div class='alert alert-info'>";
									echo "<strong>{$name2}</strong> failed to add to your cart!";
								echo "</div>";
						}?>
				</div>
			</div> 
		</div>
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
								<?php echo "$description" ?>
							</section>
										  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
								
						</section>
						
					</div>
					<div class="tab-pane fade" id="service-three">
												
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>

<?php


?>
<script>
     $("#zoom_05").elevateZoom({ zoomType    : "inner", cursor: "crosshair" });
	  $(document).ready(function() {
                        $(".mCustomScrollbar").mCustomScrollbar({axis:"x"});
       });

    function myFunction()
	{
        var fid = <?php echo "$pid"?>;		
        //var quantity = 1;
		var quantity = document.getElementById('quant').value;
		var name = document.getElementById('namehid').value;
		var price = document.getElementById('pricehid').value;
        window.location.href = "add-to-cart.php?pid=" + fid + "&name=" + name +  "&quantity=" + quantity +  "&price=" + price;
    }
     
    

</script>
<?php include_once("template_footer.php");mysqli_close($connection);?>
</body>
</html>