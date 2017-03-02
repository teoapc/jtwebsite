<?php 
	include_once('/home/eh1/e54061/public_html/wp/debug.php'); 
?>
<!DOCTYPE html5>
<html>

<head>
	<title>Josh Thomas</title>
		<link rel="stylesheet" type="text/css" href="assign2-extern.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include_once 'headermod.php'?>



<main>
<article>
    	    <?php include_once 'navmod.php'?>

	<div class = "form">	
		<h2>NEED A COMEDIAN?</h2>
		<h4>Fill out the form below to make a booking enquiry.</h4>
		<div class ="form-specs">

		<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" onsubmit="return true">
			First Name:*<br>
  				<input type="text" name="firstname" id="firstname" placeholder="First Name" pattern="^[A-Za-z\s'.-]{1,}[\.-]{0,1}[A-Za-z\s'.-]{0,}$" required="">
 			<br>
		</div>
		<div class ="form-specs">
  			Last Name:*<br>
 				<input type="text" name="lastname" id="lastname" placeholder="Last Name" pattern="^[A-Za-z\s'.-]{1,}[\.-]{0,1}[A-Za-z\s'.-]{0,}$" required="">

 			<br>
		</div>
		<div class ="form-specs">
  			Email Address:*<br>
 				<input type="email" name="email" id="email" placeholder="Email Address" required>
 			<br>
		</div>
		<div class ="form-specs">
  			Phone Number:*<br>
 				<input type="tel" name="number" id="number" placeholder="Phone Number" pattern="^(\([0-9]\)|[0-9]|\+[0-9]){1,}([ ]?\d){1,}$" required="">
 			<br>
		</div>
		<div class ="form-specs">
  			Event Date:*<br>
 				<input type="date" name="date" id="date" placeholder="Event Date" required>

 			<br>
		</div>
		<div class ="form-specs">
  			Event Flexibility:<br>
 				Inflexible<input type="range" name="date-range" id="date-range" min="0" max="2">Super-flexible
 			<br>
		</div>
		<div class ="form-specs">
  			Event Time:<br>
 				<input type="text" name="time" id="time" placeholder="Event Time">
			
 			<br>
		</div>
		<div class ="form-specs">
  			Event Location:<br>
 				<textarea name="location" cols="60" rows="5" placeholder="Enter the location of the event here"></textarea>
 			<br>
		</div>
		<div class ="form-specs">
  			Event Description:<br>
 				<textarea name="description" cols="60" rows="5" placeholder="Enter the description of the event here..."></textarea>
 			<br>
		</div>
		<div class ="form-specs">
			<p>Performance Required: </p>
			<select name="performances">
				<option value="none">-None-</option>
				<option value="mc">MC</option>
				<option value="comedyspot">Comedy Spot</option>
				<option value="fullshow">Full Show</option>
				<option value="other">Other</option>
			</select>
			<br>
		</div>

		<h4><div class="description mollom-privacy">By submitting this form, you accept the <a href="https://www.mollom.com/web-service-privacy-policy" class="mollom-target" rel="nofollow">Mollom privacy policy</a>.</h4>

        
  		<input type="submit" value="Submit" id="contact-submit">
		
		</form>

	</article>
</main>

<?php include_once 'footermod.php'?>
      
</body>
