<!doctype html>
<?php
session_start();
require('storescripts/connect_to_mysql.php');
 

    function GetImageExtension($imagetype)
    {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }

     }
function createRandomAGTNO() {
  do {
    $agt_no = mt_rand(100000000,900000000);
    $valid = true;
    if (preg_match('/(\d)\1\1/', $agt_no))
      $valid = false; // Same digit three times consecutively
    elseif (preg_match('/(\d).*?\1.*?\1.*?\1/', $agt_no))
      $valid = false; // Same digit four times in string
  } while ($valid === false);
  return $agt_no;
}

if(isset($_POST['submitbtn']))
{
	
	$id=createRandomAGTNO();
	$name =$_POST['name'];
	$category_pk = $_POST['subcategory'];
	$category_par=$_POST['category'];
	$price=$_POST['price'];
	$sale=$_POST['sale'];
	$pricesale=(100-$sale)*$price/100;
	$description=$_POST['description'];
	$sql= "INSERT INTO `ecommerce`.`products` (`pid`, `category_pk`, `category_par`, `name`, `photo`, `description`, `price`, `sale`, `pricesale`) VALUES ('$id', '$category_pk', '$category_par', '$name', NULL, '$description', '$price', '$sale', '$pricesale')";
	mysqli_select_db($connection,'ecommerce');
    $retval = mysqli_query( $connection, $sql );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($connection));
            }
     if (!empty($_FILES["files"]["name"])) {

	$file_name=$_FILES["files"]["name"];
	$temp_name=$_FILES["files"]["tmp_name"];
	$imgtype=$_FILES["files"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "images/".$imagename;
	

if(move_uploaded_file($temp_name, $target_path)) {

 	$query_upload="INSERT into `ecommerce`.`upload_data` (`PROD_CODE`,`images_path`,`date`) VALUES ('$id','".$target_path."','".date("Y-m-d")."')";
	$resu=mysqli_query($connection,$query_upload);  
	
}
if(!($resu)){
	echo mysqli_error($connection);}

}       
            echo "Entered data successfully\n";
            
            mysqli_close($connection);
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Product Form</title>
<link id="callCss" rel="stylesheet" href="style/bootstrap.min.css" media="screen"/>
<link href="style/bootstrap-responsive.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css"/>
<script type="text/javascript" src="storescripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="storescripts/jquery.leanModal.min.js"></script>
<script type="text/javascript" src="storescripts/bootstrap.min.js"></script>
</head>

<body background="style/points_cubes_background_light_91691_1920x1080.jpg">
<?php include_once("template_header.php");?>

<div class="container">
<div class="content-wrapper">
<h2>Product Form</h2>
<form class="form-horizontal" action='<?php echo htmlentities($_SERVER['PHP_SELF']);?>' method="POST" enctype='multipart/form-data'>
  <fieldset>
    <div class="col-lg-12 form-group margin50">
      <label class="col-lg-2"  for="Name">Name</label>
      <div class="col-lg-4">
        <input type="text" id="name" name="name" placeholder="" class="form-control name">
      </div>
    </div>
 
    <div class=" col-lg-12 form-group">
      <label class="col-lg-2" for="ProductType">Category</label>
      <div class="col-lg-4">
        <select id="category" name="category" class="form-control product-type" onchange="configureDropDownLists(this,document.getElementById('subcategory'))">
            <option>-Select-</option>
			<option>Electronics</option>
			<option>Home & Kitchen</option>
			<option>Books</option>
			<option>Media</option>
			<option>Music</option>
            <option>Gaming</option>
        </select>
      </div>
    </div>
    <div class=" col-lg-12 form-group">
      <label class="col-lg-2" for="ProductType">Sub-Category</label>
      <div class="col-lg-4">
        <select id="subcategory" name="subcategory" class="form-control product-type">
        </select>
      </div>
    </div>
    
    <div class="col-lg-12 form-group margin50">
      <label class="col-lg-2"  for="Name">Images</label>
      <div class="col-lg-4">
        <input type="file" name="files"/>
      </div>
    </div>
     
     <div class="col-lg-12 form-group margin50">
      <label class="col-lg-2"  for="Name">Description</label>
      <div class="col-lg-4">
        <textarea id="description" name="description" rows="4" cols="50"></textarea>
      </div>
    </div> 
    
    <div class="col-lg-12 form-group margin50">
      <label class="col-lg-2"  for="Name">Price</label>
      <div class="col-lg-4">
        <input type="text" id="price" name="price" placeholder="" class="form-control name">
      </div>
    </div>
    
    <div class="col-lg-12 form-group margin50">
      <label class="col-lg-2"  for="Name">Discount(in %)</label>
      <div class="col-lg-4">
        <input type="text" id="sale" name="sale" placeholder="" class="form-control name">
      </div>
    </div>
      
	<input type="submit" name="submitbtn" id="submitbtn" class="flatbtn-blu" value="submit">
  </fieldset>
</form>
</div>
</div>
<script type="text/javascript">
     function configureDropDownLists(category,subcategory) {
    var electronics = ['Mobiles & Accessories', 'Tablets', 'Laptops', 'Televisions', 'Computer Accessories', 'Cameras'];
    var homekitchen = ['Cookware', 'Kitchen Appliances', 'Furniture', 'Tools & Hardware', 'Home Decor'];
    var books = ['Fiction', 'Non-Fiction', 'Comics & Graphic Novels', 'Children', 'Education'];
	var media = ['Hollywood', 'Bollywood', 'Regional', 'Kids & Education'];
    var music = ['International', 'Bollywood'];
    var gaming = ['PC', 'Xbox', 'PS4', 'Consoles'];

    switch (category.value) {
        case 'Electronics':
            subcategory.options.length = 0;
            for (i = 0; i < electronics.length; i++) {
                createOption(subcategory, electronics[i], electronics[i]);
            }
            break;
        case 'Home & Kitchen':
            subcategory.options.length = 0; 
        for (i = 0; i < homekitchen.length; i++) {
            createOption(subcategory, homekitchen[i], homekitchen[i]);
            }
            break;
        case 'Books':
            subcategory.options.length = 0;
            for (i = 0; i < books.length; i++) {
                createOption(subcategory, books[i], books[i]);
            }
            break;
		case 'Media':
            subcategory.options.length = 0;
            for (i = 0; i < media.length; i++) {
                createOption(subcategory, media[i], media[i]);
            }
            break;
		case 'Music':
            subcategory.options.length = 0;
            for (i = 0; i < music.length; i++) {
                createOption(subcategory, music[i], music[i]);
            }
            break;
		case 'Gaming':
            subcategory.options.length = 0;
            for (i = 0; i < gaming.length; i++) {
                createOption(subcategory, gaming[i], gaming[i]);
            }
            break;
            default:
                subcategory.options.length = 0;
            break;
    }

}

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
</script>

<?php include_once("template_footer.php");?>
</body>
</html>