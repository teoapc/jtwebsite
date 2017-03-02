<?php
session_start();

include_once('/home/eh1/e54061/public_html/wp/debug.php'); 

?>

<!DOCTYPE html5>
<html>
<script type="text/javascript">

	var monthtext=['January','February','March','April','May','June','July','August','September','October','November','December'];

	function populatedropdown(monthfield, yearfield){
	var today=new Date()
	
	var monthfield=document.getElementById(monthfield)
	var yearfield=document.getElementById(yearfield)


	for (var m=0; m<12; m++)
	monthfield.options[m]=new Option(monthtext[m], monthtext[m])
	monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
	var thisyear=today.getFullYear()
	
	for (var y=0; y<15; y++){
	yearfield.options[y]=new Option(thisyear, thisyear)
	thisyear+=1
}
	yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
}

</script>

<head>
	<title>Checkout Page</title>
	<link rel="stylesheet" type="text/css" href="assign2-extern.css"/>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

</head>
<body>

	<?php include_once 'headermod.php'?>
	<?php include_once 'navmod.php'?>

<main>
	<div class="checkout">
	<article>
		<h2>Checkout Page</h2>
		<div class="checkout-specs">
		<h4>Fill in your details below to proceed with the checkout.</h4>
		</div>
	<div class="checkout-specs">
	<form action="https://titan.csit.rmit.edu.au/~s3575233/wp/a3/confirmation.php" method="post" onsubmit="return true">
		First Name:*<br>
  				<input type="text" name="firstname" id="firstname" placeholder="First Name" pattern="^[A-Za-z\s'.-]{1,}[.-]{0,1}[A-Za-z\s'.-]{0,}$" required>
 			<br>
		</div>
		<div class="checkout-specs">
  			Last Name:*<br>
 				<input type="text" name="lastname" id="lastname" placeholder="Last Name" pattern="^[A-Za-z\s'.-]{1,}[.-]{0,1}[A-Za-z\s'.-]{0,}$" required>
 			<br>
		</div>
		<div class="checkout-specs">
  			Address:*<br>
 				<textarea name="address" id="address" cols="60" rows="5" placeholder="Enter your address here"></textarea>
 			<br>
		</div>
		<div class="checkout-specs">
  			Email Address:*<br>
 				<input type="email" name="email" id="email" placeholder="Email Address" required>
 			<br>
		</div>
		<div class="checkout-specs">
  			Phone Number:*<br>
 				<input type="tel" name="number" id="number" placeholder="Phone Number" pattern="^(\([0-9]\)|[0-9]|\+[0-9]){1,}([ ]?\d){1,}$" required>
 			<br>
		</div>
		<div class="checkout-specs">
			Credit Card Number:*<br>
				<input type="text" name="creditcard" id="creditcard" placeholder="Credit Card Number" pattern="^[0-9\s-]{13,18}([ ]?\d){3,}$" required>	
			<br>
		</div>
		<div class="checkout-specs">
			Expiry Date:*<br> 
		<select name="month" id="monthdropdown">
		</select>
		<select name="year" id="yeardropdown">
		</select> 
		<script type="text/javascript">

			//populatedropdown(id_of_month_select, id_of_year_select)
			window.onload=function(){
			populatedropdown("monthdropdown", "yeardropdown")
		}
	
		</script>
		</div>
		<br>
		<div class="checkout-specs">
			Delivery Method:* <br>
			<select name="deliverymethod">
				<option value="Free" name="FREE" id="FREE">Regular Delivery: FREE</option>
				<option value="RegularCourier" name="regularcourier" id="regularcourier">Regular Courier: $7.00</option>
				<option value="ExpressCourier" name="expresscourier" id="expresscourier">Express Courier: $10.50 </option>
			</select>
		</div>
		<div class="checkout-specs">
			<input type="checkbox" name="remember-me" value="remember-me">&nbsp;Remember Me<br>
			<input type="checkbox" name="forget-me" value="forget-me">&nbsp;Forget Me<br>
		</div>
				<input type="submit" name="submitted" value="SUBMIT" id="submit-checkout">
			<br>
		</article>
			</div>
</main>

</body>
<footer>
            &copy; JOSH THOMAS 2016 
            <br>
            <nav id ='icons'>
		<a target="_blank" href="https://twitter.com/joshthomas87"><img src="twitter-icon.png" width="30px" height="auto"></a>
		<a target="_blank" href="https://www.facebook.com/officialjoshthomas"><img src="facebook-icon.png" width="30px" height="auto"></a>
		<a target="_blank" href="https://www.instagram.com/joshthomas87/"><img src="instagram-icon.png" width="30px" height="auto"></a>
		<a target="_blank" href="https://itunes.apple.com/au/podcast/josh-thomas-and-friend/id292322464"><img src="podcast-icon.png" width="30px" height="auto"></a>
          	<a target="_blank" href="http://joshthomas87.tumblr.com/"><img src="tumblr-icon.png" width="30px" height="auto"></a>
            </nav>
</footer>
</html>