<?php
// connect to database
require('storescripts/connect_to_mysql.php');
 
// product details
$pid = isset($_GET['id']) ?  $_GET['id'] : die;
$name = isset($_GET['name']) ?  $_GET['name'] : die;
$quantity  = isset($_GET['quantity']) ?  $_GET['quantity'] : die;
$user_id=1;
$created=date('Y-m-d H:i:s');
 
// update query
$query = "UPDATE cart_items SET quantity='$quantity' WHERE pid='$pid'";
$result=mysqli_query($connection,$query);
 
// if database insert succeeded
if($result){
    header('Location: cart.php?action=updated&id=' . $id);
}
 
// if database insert failed
else{
     header('Location: cart.php?action=updfail&id=' . $id);
}
 
?>