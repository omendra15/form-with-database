<?php
if(isset($_POST['submit'])){
  	$name = $_POST['username'];
  	$pass = $_POST['password'];

    $con=mysqli_connect('localhost','root','','omendra');
    if(!$con)
    {
    	die("database not connected");
    }
    	//$query="SELECT* from `student`(`name`, `password`, `confirm`) VALUES ('$name','$pass','$confirmpass')";
    	
        $query="SELECT* from student where name= '$name' AND password= '$pass'"; 

         $result= mysqli_query($con, $query)
          or die(mysqli_error($con));
   
         if (mysqli_num_rows($result)>0) {

             echo "you are successfully registered";
             # code...
         }

         else{
            echo "Invalid username  ,password";
         }
     }
    
  ?>