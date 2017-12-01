<?php

$a = "name";

$b = "email";

$c = "num";

$d = "add";



$mail_from = "email" ;

$header = "From: $a <$mail_from>" ;

$to = "himanshisingh0921@gmail.com";

$send_contact= mail($to,$a,$c,$d,$header);

if($send_contact){
echo "We have recieved your information";
}
else{
echo "Error";
}
?>





<html>
<head>
<title> Register 
</title>
</head>
<body bgcolor='red'>
<font color="white" size="20%"  style="times new roman"> Register Page </font> <br> <br>
<div>
<font color="white" size="4%">
             <form name="form1" action="mail.php" method="POST" >
				    NAME <input type="text" name="name" id="name" placeholder="Name..." required><br><br><br>
		            EMAIL <input type="text" name="email" id="email" placeholder="Email Address" required><br><br><br>
					PHONE NUMBER <input type="number" id="num" name="num" placeholder="Number" required><br><br><br>
					ADDRESS <input type="text" id="add" name="add"  placeholder="Address" required><br><br><br>
					<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label> <br><br><br>
					<input type="submit" name="submit" value="Register">
				</form>
				</font>
				</div>
</body>
</html>