<?php
if(isset($_POST['submit'])){
  	$id = $_POST['id'];
    $name = $_POST['name'];
  	$email = $_POST['email'];
    $pass = $_POST['password'];
  	$Branch = $_POST['Branch'];
    $Year = $_POST['Year'];
    $con=mysqli_connect('localhost','root','','omendra');
    if(!$con)
    {
    	die("database not connected");
    }
    	$query = "INSERT INTO register (id, name, email,password) VALUES ('$id','$name','$email','$pass');";       //,'$Branch','$Year'
    	
    	   $add_res = mysqli_query($con, $query)
    	           or die(mysqli_error($con));
    
        if($add_res)
    	{
    		echo "data entered successfully";
    	    echo "<br>";
    	    echo " userID :- ".$id." name:- ".$name." emailID :- ".$email." pass:- ".$pass."" ;  
    	}
    	else{
    		echo "error";
    	}
    }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
      <title></title>
  </head>
  <body>
    <a href="login.php" style="text-decoration: none;"> <h1 style="font-size:50px; color:#408922">Successfully Registered <br> Now You Can Login to the page</h1></a> 
  </body>
  </html>