<?php 
session_start();
require('storescripts/connect_to_mysql.php');
$db = mysqli_select_db($connection, "ecommerce");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
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
<?php include_once("carousel.php");?>
  	

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Electronics</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                     <?php
					 $query1 = mysqli_query($connection,"SELECT * FROM `products` WHERE `category_par` LIKE 'Electronics'" );
					 $count=0;
						while ($row1 = mysqli_fetch_array($query1)) {
							$prodid=$row1['pid'];
						$query3=mysqli_query($connection,"SELECT `images_path` FROM  `upload_data` WHERE PROD_CODE='$prodid'");
						$row3 = mysqli_fetch_array($query3);
						 echo "<div class='col-sm-3'>";
						echo "<div class='col-item'>";
						echo"<div class='photo'>";
						echo"<img src='{$row3['images_path']}' class='img-responsive' alt='a' style='height:260px;'/>";
						echo"</div>";
						echo"<div class='info'>";
						echo"<div class='row'>";
						echo"<div class='price col-md-11'>";
						echo"<h5>";
						echo"{$row1['name']}</h5>";
						echo"<h5 class='price-text-color'>";
						echo"{$row1['price']}</h5>";
						echo"</div>";
						echo"<div class='rating hidden-sm col-md-6'>";
						echo"<i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>";
						echo"</i><i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>";
						echo"</i><i class='fa fa-star'></i>";
						echo"</div>";
						echo"</div>";
						echo"<div class='separator clear-left'>";
						echo"<p class='btn-add'>";
						echo"<i class='fa fa-shopping-cart'></i><a href='add-to-cart.php?pid={$row1['pid']}&name={$row1['name']}&quantity=1&price={row1['price']}' class='hidden-sm'>Add to cart</a></p>";
						echo"<p class='btn-details'>";
						echo"<i class='fa fa-list'></i><a href='product.php?id={$row1['pid']}&name={$row1['name']}&price={$row1['price']}' class='hidden-sm'>More details</a></p>";
						echo"</div>";
						echo"<div class='clearfix'>";
						echo"</div>";
						echo"</div>";
						echo"</div>";
						echo"</div>";
						$count=$count+1;
						if($count==4){
							$count=0;
							echo"</div></div><div class='item'><div class='row'>";}
							
					}?>
                    </div>
        		</div>
    		</div>
    </div>
	
</div>
</div>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Home & Kitchen</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example1"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example1"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example1" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                     <?php
					 $query1 = mysqli_query($connection,"SELECT * FROM `products` WHERE `category_par` LIKE 'Home & Kitchen'" );
					 $count=0;
						while ($row1 = mysqli_fetch_array($query1)) {
							$prodid=$row1['pid'];
						$query3=mysqli_query($connection,"SELECT `images_path` FROM  `upload_data` WHERE PROD_CODE='$prodid'");
						$row3 = mysqli_fetch_array($query3);
						 echo "<div class='col-sm-3'>";
						echo "<div class='col-item'>";
						echo"<div class='photo'>";
						echo"<img src='{$row3['images_path']}' class='img-responsive' alt='a' style='height:260px;'/>";
						echo"</div>";
						echo"<div class='info'>";
						echo"<div class='row'>";
						echo"<div class='price col-md-11'>";
						echo"<h5>";
						echo"{$row1['name']}</h5>";
						echo"<h5 class='price-text-color'>";
						echo"{$row1['price']}</h5>";
						echo"</div>";
						echo"<div class='rating hidden-sm col-md-6'>";
						echo"<i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>";
						echo"</i><i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>";
						echo"</i><i class='fa fa-star'></i>";
						echo"</div>";
						echo"</div>";
						echo"<div class='separator clear-left'>";
						echo"<p class='btn-add'>";
						echo"<i class='fa fa-shopping-cart'></i><a href='add-to-cart.php?pid={$row1['pid']}&name={$row1['name']}&quantity=1&price={row1['price']}' class='hidden-sm'>Add to cart</a></p>";
						echo"<p class='btn-details'>";
						echo"<i class='fa fa-list'></i><a href='product.php?id={$row1['pid']}&name={$row1['name']}&price={$row1['price']}' class='hidden-sm'>More details</a></p>";
						echo"</div>";
						echo"<div class='clearfix'>";
						echo"</div>";
						echo"</div>";
						echo"</div>";
						echo"</div>";
						$count=$count+1;
						if($count==4){
							$count=0;
							echo"</div></div><div class='item'><div class='row'>";}
							
					}?>
                    </div>
        		</div>
    		</div>
    </div>
	
</div>
</div>

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Books</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example2"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example2"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example2" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                     <?php
					 $query1 = mysqli_query($connection,"SELECT * FROM `products` WHERE `category_par` LIKE 'Books'" );
					 $count=0;
						while ($row1 = mysqli_fetch_array($query1)) {
							$prodid=$row1['pid'];
						$query3=mysqli_query($connection,"SELECT `images_path` FROM  `upload_data` WHERE PROD_CODE='$prodid'");
						$row3 = mysqli_fetch_array($query3);
						 echo "<div class='col-sm-3'>";
						echo "<div class='col-item'>";
						echo"<div class='photo'>";
						echo"<img src='{$row3['images_path']}' class='img-responsive' alt='a' style='height:260px;'/>";
						echo"</div>";
						echo"<div class='info'>";
						echo"<div class='row'>";
						echo"<div class='price col-md-11'>";
						echo"<h5>";
						echo"{$row1['name']}</h5>";
						echo"<h5 class='price-text-color'>";
						echo"{$row1['price']}</h5>";
						echo"</div>";
						echo"<div class='rating hidden-sm col-md-6'>";
						echo"<i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>";
						echo"</i><i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>";
						echo"</i><i class='fa fa-star'></i>";
						echo"</div>";
						echo"</div>";
						echo"<div class='separator clear-left'>";
						echo"<p class='btn-add'>";
						echo"<i class='fa fa-shopping-cart'></i><a href='add-to-cart.php?pid={$row1['pid']}&name={$row1['name']}&quantity=1&price={row1['price']}' class='hidden-sm'>Add to cart</a></p>";
						echo"<p class='btn-details'>";
						echo"<i class='fa fa-list'></i><a href='product.php?id={$row1['pid']}&name={$row1['name']}&price={$row1['price']}' class='hidden-sm'>More details</a></p>";
						echo"</div>";
						echo"<div class='clearfix'>";
						echo"</div>";
						echo"</div>";
						echo"</div>";
						echo"</div>";
						$count=$count+1;
						if($count==4){
							$count=0;
							echo"</div></div><div class='item'><div class='row'>";}
							
					}?>
                    </div>
        		</div>
    		</div>
    </div>
	
</div>
</div>

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Media</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example3"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example3"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example3" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                     <?php
					 $query1 = mysqli_query($connection,"SELECT * FROM `products` WHERE `category_par` LIKE 'Media'" );
					 $count=0;
						while ($row1 = mysqli_fetch_array($query1)) {
							$prodid=$row1['pid'];
						$query3=mysqli_query($connection,"SELECT `images_path` FROM  `upload_data` WHERE PROD_CODE='$prodid'");
						$row3 = mysqli_fetch_array($query3);
						 echo "<div class='col-sm-3'>";
						echo "<div class='col-item'>";
						echo"<div class='photo'>";
						echo"<img src='{$row3['images_path']}' class='img-responsive' alt='a' style='height:260px;'/>";
						echo"</div>";
						echo"<div class='info'>";
						echo"<div class='row'>";
						echo"<div class='price col-md-11'>";
						echo"<h5>";
						echo"{$row1['name']}</h5>";
						echo"<h5 class='price-text-color'>";
						echo"{$row1['price']}</h5>";
						echo"</div>";
						echo"<div class='rating hidden-sm col-md-6'>";
						echo"<i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>";
						echo"</i><i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>";
						echo"</i><i class='fa fa-star'></i>";
						echo"</div>";
						echo"</div>";
						echo"<div class='separator clear-left'>";
						echo"<p class='btn-add'>";
						echo"<i class='fa fa-shopping-cart'></i><a href='add-to-cart.php?pid={$row1['pid']}&name={$row1['name']}&quantity=1&price={row1['price']}' class='hidden-sm'>Add to cart</a></p>";
						echo"<p class='btn-details'>";
						echo"<i class='fa fa-list'></i><a href='product.php?id={$row1['pid']}&name={$row1['name']}&price={$row1['price']}' class='hidden-sm'>More details</a></p>";
						echo"</div>";
						echo"<div class='clearfix'>";
						echo"</div>";
						echo"</div>";
						echo"</div>";
						echo"</div>";
						$count=$count+1;
						if($count==4){
							$count=0;
							echo"</div></div><div class='item'><div class='row'>";}
							
					}?>
                    </div>
        		</div>
    		</div>
    </div>
	
</div>
</div>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Gaming</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example4"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example4"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example4" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                     <?php
					 $query1 = mysqli_query($connection,"SELECT * FROM `products` WHERE `category_par` LIKE 'Gaming'" );
					 $count=0;
						while ($row1 = mysqli_fetch_array($query1)) {
							$prodid=$row1['pid'];
						$query3=mysqli_query($connection,"SELECT `images_path` FROM  `upload_data` WHERE PROD_CODE='$prodid'");
						$row3 = mysqli_fetch_array($query3);
						 echo "<div class='col-sm-3'>";
						echo "<div class='col-item'>";
						echo"<div class='photo'>";
						echo"<img src='{$row3['images_path']}' class='img-responsive' alt='a' style='height:260px;'/>";
						echo"</div>";
						echo"<div class='info'>";
						echo"<div class='row'>";
						echo"<div class='price col-md-11'>";
						echo"<h5>";
						echo"{$row1['name']}</h5>";
						echo"<h5 class='price-text-color'>";
						echo"{$row1['price']}</h5>";
						echo"</div>";
						echo"<div class='rating hidden-sm col-md-6'>";
						echo"<i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>";
						echo"</i><i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>";
						echo"</i><i class='fa fa-star'></i>";
						echo"</div>";
						echo"</div>";
						echo"<div class='separator clear-left'>";
						echo"<p class='btn-add'>";
						echo"<i class='fa fa-shopping-cart'></i><a href='add-to-cart.php?pid={$row1['pid']}&name={$row1['name']}&quantity=1&price={row1['price']}' class='hidden-sm'>Add to cart</a></p>";
						echo"<p class='btn-details'>";
						echo"<i class='fa fa-list'></i><a href='product.php?id={$row1['pid']}&name={$row1['name']}&price={$row1['price']}' class='hidden-sm'>More details</a></p>";
						echo"</div>";
						echo"<div class='clearfix'>";
						echo"</div>";
						echo"</div>";
						echo"</div>";
						echo"</div>";
						$count=$count+1;
						if($count==4){
							$count=0;
							echo"</div></div><div class='item'><div class='row'>";}
							
					}?>
                    </div>
        		</div>
    		</div>
    </div>
	
</div>
</div>
  
<?php include_once("template_footer.php");?>


</body>

</html>