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
        
        $query="SELECT * from register where name= '$name' AND password= '$pass'"; 

         $result= mysqli_query($con, $query)
          or die(mysqli_error($con));
   
         if (mysqli_num_rows($result)>0) {

             echo "you are successfully registered";
             # code...
         }

         else{
            echo "Invalid username, password";
         }

}
?>
 <!DOCTYPE html>
  <html>
  <head>
      <title></title>
  </head>
  <body><CENTER><br><br>
     <h1 style="font-size:79px; color:#408922" textalign="center">WELCOME TO OUR<br> STUDENT SOCIETY</h1> </CENTER>
  </body>
  </html>