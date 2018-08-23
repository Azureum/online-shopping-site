<?php
// connect to database
require('storescripts/connect_to_mysql.php');
 
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$user_id=1;
 
// delete query
$query = "DELETE FROM cart_items WHERE `product_id` LIKE '$id' AND `user_id` LIKE '$user_id'";
$result=mysqli_query($connection,$query); 

if($result){
    // redirect and tell the user product was removed
    header('Location: cart.php?action=removed&id=' . $id);
}
 
// if remove failed
else{
    // redirect and tell the user it failed
    header('Location: cart.php?action=failed&id=' . $id);
}
?>