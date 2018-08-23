<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/filterstyle.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<link id="callCss" rel="stylesheet" href="style2/bootstrap.min.css" media="screen"/>
	<link href="style2/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="style2/style.css"/>
	<script type="text/javascript" src="storescripts/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="storescripts/jquery.leanModal.min.js"></script>
	<script type="text/javascript" src="storescripts/dropdown.js"></script>
	<script type="text/javascript" src="storescripts/bootstrap.min.js"></script>
  	
	<title>Content Filters</title>
</head>
<body>
	<body background="img/points_cubes_background_light_91691_1920x1080.jpg">
	<?php include_once("template_header.php");?>

	

	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li> 
					<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
					<li class="filter" data-filter=".popular"><a href="#0" data-type="popular">Popular</a></li>
					<li class="filter" data-filter=".high"><a href="#0" data-type="high price">High Price</a></li>
					<li class="filter" data-filter=".low"><a href="#0" data-type="low price">Low Price</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->
		
		<section class="cd-gallery">
			<ul>
				
				<li class="mix high high apple ios"><img src="img/apple-iphone-6s-plus-na-400x400-imaeby76freyyfdq.jpeg"  alt="Image 1">
				<div class="col-md-14">
  				<div class="productbox">
    				<div class="producttitle"><a href="#" role="button"><center><h3>Apple iPhone 6S</h3></center></div>
    				 <div class="productprice"><div class="pull-right"><a href="#" class="pricetext" role="button">Add to Cart</a></div><div class="pricetext">Rs 79,999</div></div>
  				</div>
				</div>
                <div class="col-md-14">
				</li>
				<li class="mix high high samsung android"><img src="img/img-2.jpg" alt="Image 2">
				<div class="col-md-14">
  				<div class="productbox">
    				<div class="producttitle"><a href="#" role="button"><center><h3>Samsung Galaxy S7</h3></center></div>
    				 <div class="productprice"><div class="pull-right"><a href="#" class="pricetext" role="button">Add to Cart</a></div><div class="pricetext">Rs 56,900</div></div>
  				</div>
				</div>
                <div class="col-md-14">
				</li>
				<li class="mix popular medium motorola android"><img src="img/img-3.jpg" alt="Image 3">
				<div class="col-md-14">
  				<div class="productbox">
    				<div class="producttitle"><a href="#" role="button"><center><h3>Moto G(3rd Generation)</h3></center></div>
    				 <div class="productprice"><div class="pull-right"><a href="#" class="pricetext" role="button">Add to Cart</a></div><div class="pricetext">Rs 10,999</div></div>
  				</div>
				</div>
                <div class="col-md-14">
				</li>
				<li class="mix popular low sony android"><img src="img/img-4.jpg" alt="Image 4">
				<div class="col-md-14">
  				<div class="productbox">
    				<div class="producttitle"><a href="#" role="button"><center><h3>Sony Experia E4 Dual Sim</h3></center></div>
    				 <div class="productprice"><div class="pull-right"><a href="#" class="pricetext" role="button">Add to Cart</a></div><div class="pricetext">Rs 8,840</div></div>
  				</div>
				</div>
                <div class="col-md-14">
				</li>
				<li class="mix low low microsoft windows"><img src="img/img-5.jpg" alt="Image 5">
				<div class="col-md-14">
  				<div class="productbox">
    				<div class="producttitle"><a href="#" role="button"><center><h3>Microsoft Lumia 435</h3></center></div>
    				 <div class="productprice"><div class="pull-right"><a href="#" class="pricetext" role="button">Add to Cart</a></div><div class="pricetext">Rs 4,465</div></div>
  				</div>
				</div>
                <div class="col-md-14">
				</li>
				<li class="mix popular medium lg android"><img src="img/img-6.jpg" alt="Image 6">
				<div class="col-md-14">
  				<div class="productbox">
    				<div class="producttitle"><a href="#" role="button"><center><h3>NEXUS 5X</h3></center></div>
    				 <div class="productprice"><div class="pull-right"><a href="#" class="pricetext" role="button">Add to Cart</a></div><div class="pricetext">Rs 25,499</div></div>
  				</div>
				</div>
                <div class="col-md-14">
				</li>
				<li class="mix low low samsung android"><img src="img/img-7.jpg" alt="Image 7">
				<div class="col-md-14">
  				<div class="productbox">
    				<div class="producttitle"><a href="#" role="button"><center><h3>Samsung Guru</h3></center></div>
    				 <div class="productprice"><div class="pull-right"><a href="#" class="pricetext" role="button">Add to Cart</a></div><div class="pricetext">Rs 1,250</div></div>
  				</div>
				</div>
                <div class="col-md-14">
				</li>
				<li class="mix popular medium sony android"><img src="img/img-8.jpg" alt="Image 8">
				<div class="col-md-14">
  				<div class="productbox">
    				<div class="producttitle"><a href="#" role="button"><center><h3>Sony Experia M4 Aqua Dual</h3></center></div>
    				 <div class="productprice"><div class="pull-right"><a href="#" class="pricetext" role="button">Add to Cart</a></div><div class="pricetext">Rs 17,400</div></div>
  				</div>
				</div>
                
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">
					<h4>Search</h4>
					
					<div class="cd-filter-content">
						<input type="search" placeholder="Write something">
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>PRICE</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".low" type="checkbox" id="low">
			    			<label class="checkbox-label" for="low">Rs. 10000 and Below</label>
						</li>

						<li>
							<input class="filter" data-filter=".medium" type="checkbox" id="medium">
							<label class="checkbox-label" for="medium">Rs. 10001 - Rs. 30000</label>
						</li>

						<li>
							<input class="filter" data-filter=".high" type="checkbox" id="high">
							<label class="checkbox-label" for="high">Rs. 30001 and Above</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>BRAND</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".samsung" type="checkbox" id="samsung">
			    			<label class="checkbox-label" for="samsung">Samsung</label>
						</li>

						<li>
							<input class="filter" data-filter=".motorola" type="checkbox" id="motorola">
							<label class="checkbox-label" for="motorola">Motorola</label>
						</li>

						<li>
							<input class="filter" data-filter=".apple" type="checkbox" id="apple">
							<label class="checkbox-label" for="apple">Apple</label>
						</li>
						<li>
							<input class="filter" data-filter=".sony" type="checkbox" id="sony">
							<label class="checkbox-label" for="sony">Sony</label>
						</li>
						<li>
							<input class="filter" data-filter=".lg" type="checkbox" id="lg">
							<label class="checkbox-label" for="lg">LG</label>
						</li>
						<li>
							<input class="filter" data-filter=".microsoft" type="checkbox" id="microsoft">
							<label class="checkbox-label" for="microsoft">Microsoft</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>OPERATING SYSTEM</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">All</label>
						</li>

						<li>
							<input class="filter" data-filter=".android" type="radio" name="radioButton" id="android">
							<label class="radio-label" for="android">Android</label>
						</li>

						<li>
							<input class="filter" data-filter=".ios" type="radio" name="radioButton" id="ios">
							<label class="radio-label" for="ios">iOS</label>
						</li>
						<li>
							<input class="filter" data-filter=".windows" type="radio" name="radioButton" id="windows">
							<label class="radio-label" for="windows">Windows</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>

			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Filters</a>
	</main> <!-- cd-main-content -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<?php include_once("template_footer.php");?>

</body>
</html>