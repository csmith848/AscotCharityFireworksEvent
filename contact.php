<!DOCTYPE html5>
<html>

	<head>

        <meta charset="utf-8">

		<!--	FOR RESPONSIVE DESIGN    -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!---->

		<!--	WEB BROWSER WINDOW/TAB DESCRIPTION    -->
		<title>Ascot Charity Fireworks | Contact</title>
		<!---->

		<meta name="description" content="A guide to the Ascot Charity Fireworks Event">

  		<meta name="keywords" content="Fireworks, Charity,  Ascot, Berkshire, England, Race Course">

		<!--	STYLESHEET LINK    -->
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<!---->
  </head>


    <body>

		<header>

			<!--	NAVIGATION BAR    -->
			<div>
        <button class="menuNav" type="button" name="Menu" onclick="openMenu()">Menu</button>
				<ul class="nav">
					<li><a href="index.html">Home</a></li>
					<li><a href="details.html">Details</a></li>
					<li><a href="news.html">News</a></li>
					<li><a href="tickets.html">Tickets</a></li>
					<li><a href="pictures.html">Pictures</a></li>
					<li><a href="faq.html">FAQ</a></li>
					<li><a href="more.html">More</a></li>
					<li><a class="active">Contact</a></li>
				</ul>
			</div>
			<!---->

		</header>

<?php
// see if this is the form being submitted or not
$complete=false;
if ($_POST['func']=='contact')
{	// yes its the form, so let's try and process it
	//Setting the variables
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

//Conditional tests based on selection to direct the enquiry
	switch($_POST['mailToOption']) {
	case 'Organisers':
		$mailTo = "fireworks@n2web.co.uk, alihaig.01@gmail.com";
	break;
	case 'Web Master':
		$mailTo = "artwm@n2web.co.uk";
	break;
	}

// Conditional tests based on checkboxes to display the user's contact requests
	if (isset($_POST['contactByPhone_cb'])) {
		$contactByPhone = "YES";
	} else {
		$contactByPhone = "NO";
	}

	if (isset($_POST['contactByEmail_cb'])) {
		$contactByEmail = "YES";
	} else {
		$contactByEmail = "NO";
	}

	if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $mailFrom)) {
		$error = 'Please provide a valid email address for us to contact you.';
	}
	else {
// we passed basic validation so continue
		$complete=true;
//Setting the parameters to be used in mail() function below
		$subject = "Message from ascotfireworks.org.uk contact form!";
		$headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1 \r\n".
				   "From: enquiries@ascotfireworks.org.uk\r\n" .
				   "Reply-To: enquiries@ascotfireworks.org.uk\r\n";
//Constructing and formatting the message to be sent
			$txt = "The following enquiry has been recieved from ".$name.
					".<br><br>============<br><br>"
					.$message.
					"<br><br>============<br><br>".
					"Contact ".$name." by?<br><br>".
					"Telephone: ".$contactByPhone."<br>".
					"Phone Number: ".$phone."<br>".
					"Email: ".$contactByEmail."<br>".
					"Email Add: ".$mailFrom."<br>";



//mail() function to send the email
		mail($mailTo, $subject, $txt, $headers);
?>
		<main>
  		<div id="mainDiv">
        <div class="main_intro">
  			  <p>Thank you. Someone will be in contact with you shortly.</p>
  			</div>
      </div>
		</main>
<?php
	}
}

if ($complete!=true)
{
?>
		<main>
      <div id="mainDiv">
			<div class="main_intro">
				<p>
					We would very much like to hear from you about any questions, comments or corrections you may have.
					<br>
					Please complete the short form below, and we will be in contact with you shortly.
				</p>
<?php
	if ($error !='') echo'<p class="alert_text">'.$error.'</p>';
?>
			</div>
			<br>
			<div>
				<div class="form_container">
					<div class="form_row">
						<div class="form_column">
							<form action="contact" method="post" name="emailform">
								<input type="hidden" name="func" value="contact" />

								<label for="mailToOption">Send to who?</label>
								<select name="mailToOption">
									<option value="Organisers">Organisers</option>
									<option value="Web Master">Web Master</option>
								</select>

								<label for="name">Name (Required)</label>
								<?php echo '<input name="name" type="text" tabindex="1" value="'.$name.'" placeholder="Enter your full name here.." required>'; ?>

								<label for="email">Email (Required)</label>
								<?php echo '<input name="email" type="text" tabindex="2" value="'.$mailFrom.'" placeholder="Enter your email address here.." required>'; ?>

								<label for="phone">Telephone Number</label>
								<input name="phone" type="text" tabindex="3" placeholder="If you wish, enter your phone number here..">

								<label for="message">Comment or Question  (Required)</label>
								<?php echo '<textarea name="message" tabindex="4" placeholder="Enter your message here.." style="height:170px" required>'.$message.'</textarea>'; ?>

								<p>
									How should we contact you?
								</p>

								<input name="contactByPhone_cb" type="checkbox" <?php if (isset($_POST['contactByPhone_cb'])) echo 'checked' ?>> Telephone<br>
								<input name="contactByEmail_cb" type="checkbox" <?php if (isset($_POST['contactByEmail_cb'])) echo 'checked' ?>> Email<br>
								<br>

								<input type="submit" value="Submit">
							</form>
						</div>
						<!-- <div class="form_column" id="map">
							<p>
								Map Coming Soon
							</p>
						</div> -->
					</div>
				</div>
			</div>
      </div>
		</main>
<?php
}
?>
		<!-- Initialize Google Maps -->
<!--
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
-->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

		<footer>

			<div>
				<!--	BACKGROUND-BOTTOM    -->
				<img class="background" id="background_bottom" src="img/background_bottom.jpg" alt="Background_Bottom">
				<!---->
			</div>

			<!--	FOOTER    -->
			<p id="charity_info">
			This event is organised by Ascot Round Table, which is affiliated to the National Association of Round Tables of Britain & Ireland
			<br>
			www.roundtable.co.uk
			<br>
			Ascot Round Table is registered with the Charity Commission, number 1057937
			</p>
			<!---->

		</footer>

		<!--	SCRIPTS    -->
		<script src="js/openMenu.js"></script>
		<!---->

    </body>


</html>
