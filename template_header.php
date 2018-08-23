<?php
require('storescripts/connect_to_mysql.php');
    // If the values are posted, insert them into the database.
    if(isset($_POST['loginbtn']))
	{
	if (isset($_POST['email']) && isset($_POST['pwd'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
	$sql= mysqli_query($connection,"SELECT * FROM `users` WHERE `email` = '$email' AND `pwd` = '$pwd'");
	if(mysqli_num_rows($sql) > 0)
	{
		header('Location: login/index.php');
	}
	else
	{
		echo ("Wrong username password combination.Please re-enter.");
		exit();
	}
}
else{
	echo "you didnot enter all fields";
}}
if(isset($_POST['submitbtn']))
{
	$flag=0;
    // If the values are posted, insert them into the database.
    if (isset($_POST['email']) && isset($_POST['pwd'])){
        $email = $_POST['email'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
        $pwd = $_POST['pwd'];
		$cpwd = $_POST['cpwd'];
		
	$a=mysqli_query($connection,"SELECT email FROM users");
	if(mysqli_num_rows($a) > 0)
	{
		while($b=mysqli_fetch_array($a))
		{
				
			if($email == $b['email'])
			{
				$flag=1;
			}
			
		}
	}
	if($flag==0){	
	if($pwd==$cpwd)
	{
        $query = "INSERT INTO `users` (email, fname, lname, phone, pwd) VALUES ('$email', '$fname', '$lname','$phone','$pwd' )";
        $result = mysqli_query($connection,$query);
        if($result){
			echo "User Created Successfully.";
        }
    }
	else
	{
		echo "Entered Password are not same....";
	}
	
	}
	else{
		echo "User Already Exists";
	}
	}
}

?>
<div id="pageheader">
 
  <table width="100%" border="0">
  <tbody>
    <tr>
      <td><a href="index.php"><img src="style/name.png" width="198" height="83" alt=""/></a></td>
      <td>
      <form id="searchbox" action="search.php" method="post">
    	<input id="search" type="text" placeholder="Type here" name="search"><input id="submit" style="height:32px;" class="flatbtn" type="submit" value="Search" name="submitbtn">
		</form>
        </td>
      <div id="logsign"><td><a href="productform.php" class="flatbtn" id="contact">Product Form</a> <a href="#userlogin" class="flatbtn" id="button1">Login</a>    
       <a href="#usersignup" class="flatbtn" id="button2">Signup</a><a href="#cart" class="flatbtn" id="button3">Cart</a></td></<div>
    </tr>
  </tbody>
</table>
<ul id="menu-bar">
  <li><a href="#">Categories</a></li>
  <li><a href="product_list.php?search=Electronics">Electronics</a>
    <ul>
      <li><a href="product_list.php?search=Mobiles">Mobiles & Accessories</a></li>
      <li><a href="product_list.php?search=Tablets">Tablets</a></li>
      <li><a href="product_list.php?search=Laptops">Laptops</a></li>
	  <li><a href="product_list.php?search=Televisions">Televisions</a></li>
	  <li><a href="product_list.php?search=Computer">Computer Accessories</a></li>
	  <li><a href="product_list.php?search=Cameras">Cameras</a></li>
    </ul>
  </li>
	  <li><a href="product_list.php?search=Home">Home & Kitchen</a>
    <ul>
      <li><a href="product_list.php?search=Cookware">Cookware</a></li>
      <li><a href="product_list.php?search=Appliances">Kitchen Appliances</a></li>
      <li><a href="product_list.php?search=Furniture">Furniture</a></li>
      <li><a href="product_list.php?search=Hardware">Tools & Hardware</a></li>
	  <li><a href="product_list.php?search=Decor">Home Decor</a></li>
    </ul>
  </li>
  <li><a href="product_list.php?search=Books">Books</a>
    <ul>
    <li><a href="product_list.php?search=Fiction">Fiction</a></li>
    <li><a href="product_list.php?search=Non-Fiction">Non-Fiction</a></li>
    <li><a href="product_list.php?search=Comics">Comics & Graphic novels</a></li>
    <li><a href="product_list.php?search=Children">Children</a></li>
	<li><a href="product_list.php?search=Education">Education</a></li>
	</ul>
	</li>
	 <li><a href="product_list.php?search=Media">Media</a>
    <ul> 
	<li><a href="product_list.php?search=Hollywood">Hollywood</a></li>
    <li><a href="product_list.php?search=Bollywood">Bollywood</a></li>
    <li><a href="product_list.php?search=Regional">Regional</a></li>
    <li><a href="product_list.php?search=Kids">Kids & Education</a></li>
	</ul>
	</li>
	<li><a href="product_list.php?search=Music">Music</a>
    <ul> 
	<li><a href="product_list.php?search=International">International</a></li>
	<li><a href="product_list.php?search=Bollywood">Bollywood</a></li>
	</ul>
	</li>
	<li><a href="product_list.php?search=Gaming">Gaming</a>
    <ul> 
	<li><a href="product_list.php?search=PC">PC</a></li>
    <li><a href="product_list.php?search=XBOX">XBOX One</a></li>
    <li><a href="product_list.php?search=PS4">PS4</a></li>
    <li><a href="product_list.php?search=consoles">Gaming consoles</a></li>
	</ul>
	</li>
	
    </ul>

<div id="userlogin" style="display:none;height:45%;width:20%;position: absolute;top:0;bottom: 0;left: 0;right: 0;margin: auto;">
    <h1>Login</h1>
		<form id="loginform" name="loginform" method="post" action="<?php $_PHP_SELF ?>">
		  <input type="text" name="email" id="email" placeholder="Email" class="txtfield" tabindex="1">
		  <input type="password" name="pwd" id="pwd" placeholder="Password" class="txtfield" tabindex="2">
		  <span>
    
    </span>
		  
		  <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu" value="Log In" tabindex="3"></div>
		</form>
</div>
	  
<div id="usersignup" style="display:none;height:80%;width:50%;position: absolute;top:0;bottom: 0;left: 0;right: 0;margin: auto;">
		<h1>Signup</h1>
		<form id="signupform" name="signupform" method="post" action="<?php $_PHP_SELF ?>">
		  <input type="text" id="fname" placeholder="First Name" name="fname" class="txtfield" tabindex="1">
		  <input type="text" id="lname" placeholder="Last Name" name="lname" class="txtfield" tabindex="2">
		  <input type="text" id="email" placeholder="Email" name="email" class="txtfield" tabindex="3">
		  <input type="number" id="phone" placeholder="Mobile No." name="phone" class="txtfield" tabindex="4">
          <input type="password" id="pwd" name="pwd" placeholder="Password" class="txtfield" tabindex="5">
		  <input type="password" id="cpwd" name="cpwd" placeholder="Confirm Password" class="txtfield" tabindex="6">
		  
		  <div class="center"><input type="submit" name="submitbtn" id="submitbtn" class="flatbtn-blu" value="Sign Up" tabindex="7"></div>
		</form>
	  </div>  
<div id="cart" class:"container" style="display:none;height:50%;width:50%;position: absolute;top:0;bottom: 0;left: 0;right: 0;margin: auto;">
	<table id="cart" class="table table-hover table-condensed">
    				<thead style="background: #8B8B8B;background: linear-gradient(top, #404457, #1C1F26);background: -ms-linear-gradient(top, #404457, #1C1F26);background: -webkit-gradient(linear, left top, left bottom, from(#404457), to(#1C1F26));background: -moz-linear-gradient(top, #404457, #1C1F26);color:#fff;">
						<tr>
							<th style="width:50%;color:#fff;">Product</th>
							<th style="width:10%;color:#fff;">Price</th>
							<th style="width:8%;color:#fff;">Quantity</th>
							<th style="width:22%;color:#fff;" class="text-center">Subtotal</th>
							<th style="width:10%;color:#fff;"><a href="cart.php">Edit Cart</a></th>
						</tr>
					</thead>
					<tbody>
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
<script type="text/javascript">
$(function(){
   $('#button1').leanModal({ top: 10, overlay: 0.45, closeButton: ".hidemodal" });
   $('#button2').leanModal({ top: 10, overlay: 0.45, closeButton: ".hidemodal" });
   $('#button3').leanModal({ top: 10, overlay: 0.45, closeButton: ".hidemodal" });
});
</script>