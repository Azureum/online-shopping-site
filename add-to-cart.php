<?php
// connect to database
require('storescripts/connect_to_mysql.php');
 
// product details
$pid = isset($_GET['pid']) ?  $_GET['pid'] : die;
$name = isset($_GET['name']) ?  $_GET['name'] : die;

$quantity  = isset($_GET['quantity']) ?  $_GET['quantity'] : die;
$price = isset($_GET['price']) ?  $_GET['price'] : die;
$user_id=1;
$created=date('Y-m-d H:i:s');
 
// insert query
$query = "INSERT INTO `ecommerce`.`cart_items` (`product_id`, `quantity`, `user_id`, `created`, `modified`) VALUES ('$pid', '$quantity', '$user_id', '$created', CURRENT_TIMESTAMP);";
$result=mysqli_query($connection,$query);
 
// if database insert succeeded
if($result){
    header('Location: product.php?action=added&id=' . $pid . '&name=' . $name . '&price=' . $price);
}
 
// if database insert failed
else{
     header('Location: product.php?action=failed&id=' . $pid . '&name=' . $name . '&price=' . $price);
}
 
?>