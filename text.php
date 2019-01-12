<?php
if(isset($_POST['submit'])){
  	$name = $_POST['username'];
  	$pass = $_POST['password'];
  	$confirmpass = $_POST['confirmpass'];
    $con=mysqli_connect('localhost','root','','omendra');
    if(!$con)
    {
    	die("database not connected");
    }
    	$query="INSERT INTO `student`(`name`, `password`, `confirm`) VALUES ('$name','$pass','$confirmpass')";
    	
    	   $add_res = mysqli_query($con, $query)
    	           or die(mysqli_error($con));
    
        if($add_res)
    	{
    		echo "data entered successfully";
    	    echo "<br>";
    	    echo "username:- ".$name." pass:- ".$pass."";

    	}
    	else{
    		echo "error";
    	}
    }
  ?>