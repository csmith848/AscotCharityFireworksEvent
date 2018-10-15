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
  if ($suppressOnlineTickets)
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
if ($current!='') {
	$count=intval($current);
	$count++;
	$current=strval($count);
	file_put_contents($file, $current);
}
?>
		<script language=javascript>
		function redirect(){
		window.location = "<?php echo $linkurl; ?>";
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
			If this does not appear within 10 seconds please click <a href="<?php echo $linkurl; ?>">here</a> to manually open the page.
			</p>
			
<?php
    }
    if ($endTicketSales)
    {  // say tickets no longer available online
?>
			<td width="85%" class="top">
			<p>Sorry tickets are no longer available on-line.<br />
			Please purchase tickets from the gates which are open from <?php echo $admission; ?><br />
			On-line tickets were only available until <?php echo $onlineCutOffTime; ?> on the day of the event.
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

				<p><span class="important">IMPORTANT INFORMATION - PLEASE READ CAREFULLY</span><br />
					<b>Before you purchase your on-line tickets, please read all of the information here. This information is to ensure you understand the process and
					what you must bring with you when you arrive at the event.<br /><br />
					
					<u>Failure to follow this information may lead to you being refused entry to the event.</u></b><br /><br />
					
					When you select to purchase tickets on-line (below) you will be transferred to the Ascot on-line ticket purchase portal. Within this portal
					you can select the number of Adult and Child tickets required. Remember children under 5 do not require a ticket. Child tickets are for children
					between 5 &amp; 12 years of age inclusive. Children 13 years or over require an Adult ticket. <br />
					<u>All</u> children must be accompanied by an adult, including those with an adult ticket.<br /><br />
					
					After completion of your purchase you will print each ticket out. <span class="red">If you cannot print tickets now, please do not proceed.</span> 
					You must bring all your printed tickets with you to the gate to be scanned and allow entry.<br />
					Please ignore any messages on the portal about collecting tickets or postal delivery - this is <u>not</u> possible.<br />
					Please note it is <u>not</u> possible to have replacement tickets issued or to order them by telephone.<br />
					Please also ignore any messages about parking passes. These are not required as free parking is available - see <a href="/directions.php">directions page</a> for further information.<br /><br />
					
					There may be a fee charged for using this service - this will be confirmed before you commit to buy<br />

					<span class="red"> Tickets will be available until <?php echo $onlineCutOffTime; ?> on the day of the event</span><br />
					After this time please purchase tickets on the gate<br /><br />
					

				</p>
				<form action="oltickets.php" method="post">
				<p>To proceed to the on-line portal, please tick to confirm you have read and understood<br />the information above <input type="checkbox" name="confirmed" value="yes" onclick="submit();"><br />
				</p>
				</form>
        
        <p><b>Ascot Charity Fireworks Event is organised by Ascot Round Table.<br />
        <font color="red">Only tickets purchased from Ascot Round Table raise money for charity.</font></b><br />
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















