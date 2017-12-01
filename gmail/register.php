<?php

if(isset($_POST["submit"]))
{
$c="";
$a = $_POST["firstname"];
$b = $_POST["lastname"];
$d = $_POST["email"];
$e = $_POST["num"];
$f = $_POST["add"];


if(isset($_POST["checkbox"])){

if(isset($_POST["box"])){
	$c="y";
}else{
	$c="N";
}
include('connection.php');
$q="insert into register(Fname,Lname,Email,Phone_number,Address) values('$a','$b','$d','$e','$f')";
    
    
    $z="select *from register where email='$d'";
    $y=mysqli_query($con,$z)or die(mysqli_error($y));
    $x=mysqli_num_rows($y);
    if($x>0)
    {
        echo("<script>alert('email id already registered');</script>");
    }
    
    else
    {
    
    
         $response=mysqli_query($con,$q)or die(mysqli_error($response));
        
    
    if($response==true)
    {
      echo " <script>alert('registered succesfully');</script>";     
    }else{
		echo "<script>alert(' registration not successful');</script>";
		}
        
    }

}else{
	echo "<script>alert('Please accept terms and conditions');</script>";
}
}

?>










<html>
<head>
<title> Register 
</title>
</head>
<body bgcolor='black'>
<font color="white" size="20%"  style="times new roman"> Register Page </font> <br> <br>
<div>
<font color="white" size="4%">
             <form action="register.php" method="POST" onsubmit="return valid();">
				FIRST NAME <input type="text" name="firstname" placeholder="First Name..." required><br><br><br>
				LAST NAME <input type="text" name="lastname" placeholder="Last Name..." required><br><br><br>
				
									
					EMAIL <input type="email" name="email" placeholder="Email Address" required><br><br><br>
					PHONE NUMBER <input type="NUMBER" id="n1" name="num" placeholder="Number" required><br><br><br>
					ADDRESS <input type="text" id="n2" name="add"  placeholder="Address" required><br><br><br>
					<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label> <br><br><br>
					<input type="submit" name="submit" value="Register">
				</form>
				</font>
				</div>
</body>
</html>