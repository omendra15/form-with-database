<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body><center>
	<table bgcolor="#408922" width="1420" height="40">
		<tr><td>
			<h1 style="font-size:41px; color:white">STUDENT CORNER</h1>
		</td>
		<td><h3 style="color:white; font-size:25px"><a href="login.php" style="text-decoration: none; color: white">Log In</a></td></tr>
	</table>
	<table bgcolor="#9AC388"  width="1520" height="15">
		<tr><td>
		</td></tr></table>
		
	<h1 style="color:#408922; font-size: 45px ">REGISTRATION</h1><br>
 <form action="reg1.php" method="post">
 	
 	<table>
 		<tr>
 	<td><b>COLLEGE ID :</b></td>  <td><input type="text" name="id" placeholder="for eg- PCE17CS076" size="30"></td></tr><tr height="14"></tr>
 	
 	     <tr><td><b>STUDENT NAME :</b></td>  <td><input type="text" name="name" placeholder="enter your name" size="30"></td></tr><tr height="14"></tr>
 	       <tr><td><b>Email</td> :</b> <td><input type="text" name="email" placeholder="2017pcecsatul076@poornima.org" size="30"></td></tr><tr height="14"></tr>
 	         <tr><td>
 	         	<b>PASSWORD :</b></td><td><input type="PASSWORD" name="password">
 	         </td></tr><tr height="14"></tr>


 	         <tr>
 	         	<td><b>Branch :</b></td> <td><select name="Branch">

         <option>Computer Sceince</option>
         <option>Information Technology</option>
         <option>Electrical</option>
         <option>Electronics</option>
         <option>Civil</option>
         <option>Mechanical</option>
                
 	     </select></td></tr><tr height="14"></tr>
           <tr>
           	<td><b>Year :</b></td> <td><select name="Year">
    	
         	<option>1st</option>
            <option>2nd</option>
            <option>3rd</option>
            <option>4th</option>

            </select></td></tr><tr height="14"></tr>
              
              <tr><td><input type="submit" name="submit" value="Register" style="color:white;background-color:green; border:2px solid #336600"></td>
               <td><input type="reset" name="reset" value="Clear" style="color:white;background-color:green; border:2px solid #336600" ></td></tr><tr height="14"></tr>
           </table>

 </form></center>
</body>
</html>