<?php
	require('connect_to_mysql.php');
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
		   //$_SESSION['errors'] = array("User Created Successfully.");
//header("Location:index.php");
			//$msg = "User Created Successfully.";
			//header("Location:http://localhost/index.php?msg=$msg");
        }
    }
	else
	{
		echo "Entered Password are not same....";
		//$_SESSION['errors'] = array("Entered Password are not same....");
//header("Location:index.php");
		//$msg = "Entered Password are not same....";
		//header("Location:http://localhost/index.php?msg=$msg");
	}
	
	}
	else{
		echo "User Already Exists";
		//$_SESSION['errors'] = array("User Already Exists");
//header("Location:index.php");
		//$msg = "User Already Exists";
		//header("Location:http://localhost/index.php?msg=$msg");
	}
	}
    ?>