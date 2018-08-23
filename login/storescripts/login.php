<?php
require('connect_to_mysql.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['email']) && isset($_POST['pwd'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
	$sql= mysqli_query($connection,"SELECT * FROM `users` WHERE `email` = '$email' AND `pwd` = '$pwd'");
	if(mysqli_num_rows($sql) > 0)
	{
		echo "Welcome";
	}
	else
	{
		echo ("Wrong username password combination.Please re-enter.");
		exit();
	}
}
else{
	echo "you didnot enter all fields";
}
?>