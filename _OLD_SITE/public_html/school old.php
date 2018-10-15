<?php
require 'logic.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- written by Paul Nott August 2006 -->
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <meta http-equiv="Content-Language" content="en-gb">
  <title>Ascot Charity Fireworks Event</title>
  <meta name="description" CONTENT="A guide to the Ascot Charity Fireworks Event">
  <meta name="keywords" CONTENT="Fireworks, Charity,  Ascot, Berkshire, England, Race Course">
  <link rel="stylesheet" type="text/css" href="fireworks.css">
  <script type="text/javascript" src="menu.js"></script>
	
<?php
  if ($suppressSchoolTickets)
  { // online tickets not enabled
?>
		<script language=javascript>
		function redirect(){
		window.location = "http://www.ascotfireworks.org.uk";
		}
		</script>
</head>
<body onload="setTimeout('redirect();', 200);">
<?php
  }
  else if ($_POST["confirmed"]=='yes')
	{  // confirmed so redirect

// count number of confirmed actions processed
$file = 'confirmed.txt';
$current = file_get_contents($file);
$count=intval($current);
$count++;
$current=strval($count);
file_put_contents($file, $current);
?>
		<script language=javascript>
		function redirect(){
		window.location = "<?php echo $schoolurl; ?>";
		}
		</script>
</head>
<body onload="setTimeout('redirect();', 2000);">
<?php
	}
	else
	{ //do normal (not redirected)
?>
</head>
<body>
<?php
	}
?>

<?php
require 'pageheader.php';
?>


<!-- left menu section -->  
  <table width="970">
    <tr>
      <td width="15%" class="top">
        <script type="text/javascript">menu(2)</script>
      </td>

<?php
	if ($_POST["confirmed"]=='yes')
	{	// do redirection
?>
			<td width="85%" class="top">
			<p>Thank you. You will now be redirected to the on-line ticket portal.<br />
			If this does not appear within 10 seconds please click <a href="<?php echo $schoolurl; ?>">here</a> to manually open the page.
			</p>
			
			
<?php
	}
	else
	{ // output the page for confirmation
?>
			<!-- main page section - note part of same table as menu -->      
      
      <td width="85%" class="top">
        <p class="boldcentre">Gates open <?php echo $admission; ?>, Fireworks start <?php echo $disptime; ?></p>
        <table width="100%">
          <tr>
            <td align="center">
              <table>
                <tr>
                  <td class="prices" align="left">
              Prices in advance
                  </td>
                  <td></td>
                  <td class="prices">
              Adults &pound;<?php echo $adultAdv; ?>, Children &pound;<?php echo $childAdv; ?>, under 5 free
                  </td>
                </tr>
                <tr><td></td><td></td><td align="left">Adult tickets for age 13+, Children 5-12 years old.<br />Under 5's do not require a ticket</td></tr>
              </table>
            </td>
          </tr>
        </table>

				<p><span class="xlarge">School online tickets</span><br />
					<span class="important">IMPORTANT INFORMATION - PLEASE READ CAREFULLY</span><br />
					<b>Before you purchase your on-line tickets, please read all of the information here. This information is to ensure you understand the process and
					what you must bring with you when you arrive at the event. <br /><br />
					
					<span class="xlarge"><u>Failure to follow this information may lead to you being refused entry to the event and your school may not benefit from your purchase.</u></span></b><br /><br />
					
					When you select to purchase tickets on-line (below) you will be transferred to the Ascot on-line ticket purchase portal. Within this portal
					you can select the number of Fireworks Spectacular Adult and Child tickets required.<br />Remember children under 5 do not require a ticket. Child tickets are for children
					between 5 &amp; 12 years of age inclusive. Children 13 years or over require an Adult ticket. <br />
					<u>All</u> children must be accompanied by an adult, including those with an adult ticket.<br /><br />
					
					<span class="red"><u>Before</u> selecting the tickets required, enter your schools code (listed below) in the Promotion Code field and click Apply Promotion Code. Then select the number of
					tickets required and click on continue.<br /></span>
					This will ensure your school will benefit from your purchase<br /><br />
					
					After completion of your purchase you will print each ticket out. <span class="red">If you cannot print tickets now, please do not proceed.</span> 
					You must bring all your printed tickets with you to the gate to be scanned and allow entry.<br /><br />
					
					Please ignore any messages on the portal about collecting tickets or postal delivery - this is <u>not</u> possible.<br />
					Please note it is <u>not</u> possible to have replacement tickets issued or to order them by telephone.<br />
					Please also ignore any messages about parking passes. These are not required as free parking is available - see <a href="/directions.php">directions page</a> for further information.<br /><br />
					
					There may be a fee charged for using this service - this will be confirmed before you commit to buy<br />
				</p>
				<p><b>School Codes</b><br />
				Please lookup the correct code for your school and enter this as the promotion code on the portal<br />	
				<table width="90%">
					<tr><td>School</td><td>Code</td></tr>
					<tr><td>St Mary's C of E Winkfield</td><td>stmarysce</td></tr>
					<tr><td>Ascot Heath Junior School</td><td>ascotheathjun</td></tr>
					<tr><td>Ascot Heath Infant School</td><td>ascotheathinfant</td></tr>
					<tr><td>Cranbourne County</td><td>cranbourne</td></tr>
					<tr><td>Ascot & Cranbourne Pre-School</td><td>ascranpreschool</td></tr>
					<tr><td>Papplewick School</td><td>papplewick</td></tr>
					<tr><td>Licenses Victuallers School</td><td>lvaschool</td></tr>
					<tr><td>Cheapside Primary</td><td>cheapside</td></tr>
					<tr><td>South Ascot Village</td><td>scascvillage</td></tr>
					<tr><td>St Francis</td><td>stfrancis</td></tr>
					<tr><td>St Michaels Primary</td><td>stmichaels</td></tr>
					<tr><td>Holy Trinity Primary</td><td>holytrinity</td></tr>
					<tr><td>Charters</td><td>charters</td></tr>
					<tr><td>Queen Anne, Windsor</td><td>queenanne</td></tr>
					<tr><td>The Royal School, Windsor Great Park</td><td>theroyalschool</td></tr>
				</table>
				</p>
				
				<form action="school.php" method="post">
				<p>To proceed to the on-line portal, please tick to confirm you have read and understood<br />the information above <input type="checkbox" name="confirmed" value="yes" onclick="submit();"><br />
				</p>
				</form>
        
        <p><b>Ascot Charity Fireworks Event is organised by Ascot Round Table.<br />
        <font color="red">Only Ascot Round Table Fireworks Spectacular tickets raise money for charity.</font></b><br />
        These tickets are available from local shops and schools as listed on the home page. They can also be purchased in advance via
        our on-line ticket portal or alternatively at the gate on the night.</p>
        
      </td>
<?php
	}
?>
    </tr>
  </table>
  <br>

  </body>
</html>















