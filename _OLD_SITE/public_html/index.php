<?php 
require 'logic.php';
// Simple visit counter
$file = 'count.txt';
$current = file_get_contents($file);
if ($current!='') {
	$count=intval($current);
	$count++;
	$current=strval($count);
	file_put_contents($file, $current);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- written by Paul Nott August 2006 -->
<!-- updated to server side code Paul Nott 2013 -->
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <meta http-equiv="Content-Language" content="en-gb">
  <title>Ascot Charity Fireworks Event</title>
  <meta name="description" CONTENT="A guide to the Ascot Charity Fireworks Event">
  <meta name="keywords" CONTENT="Fireworks, Charity,  Ascot, Berkshire, England, Race Course">
  <link rel="stylesheet" type="text/css" href="fireworks.css">
  <script type="text/javascript" src="fireworks.js"></script>
  <script type="text/javascript" src="menu.js"></script>
</head>
<body>
<?php
require 'pageheader.php';
?>
<!-- left menu section -->  
  <table width="100%">
    <tr>
      <td width="15%" class="top">
        <script type="text/javascript">menu(1)</script>
      </td>
<?php
if ($future){ # pre event message
?>
        <!-- main page section - note part of same table as menu -->
      <td width="85%">
        <p><strong itemprop="description">Come and join us for the <?php echo $dispyear; ?> Ascot Charity Fireworks event.</strong><br><strong>
        This popular event will again be held in the excellent all weather Racecourse Grandstand.<br>
<!--         <font color="red">Remember to dress for the occasion, with prizes for children in fancy dress that scare us the most !</font> -->
        </strong></p>
        
        <p><strong>The event will follow the first of the <?php echo $season; ?> Jumps season race meeting.</strong><br></p>
        
        <p><strong><font color="red">We are pleased to announce following the last several years of excellent displays that Star Fireworks, one of the countries
        leading display companies and winners of the 2010 &amp; 2013 British Fireworks Championships, will once again be both sponsoring the event and providing what
        promises to be an even larger &amp; greater show this year.</font></strong></p>
        
        <p><strong>For Car Parking arrangements.</strong> Please look at <a href="directions.php">directions</a>
        for details.</p>
		
        <p><span datetime="2015-10-31T18:15">On <?php echo $dispdate; ?><sup><?php echo $dispstndth; ?></sup> <?php echo $dispmonth.' '.$dispyear; ?>, Ascot Round Table
		is organising a Charity Fireworks Display
        hosted at Ascot Racecourse. Firework admissions from <?php echo $admission; ?> and the fireworks
        display starts at <?php echo $disptime; ?>.</span><br>
        In addition to the fireworks there will also be a Fun Fair with wide range of rides. Also
        food, drink and licensed bars available.</p>
        
        <P><font color="red">All proceeds from buying an Ascot Round Table fireworks ticket support local charities. <br />
        Know a local charity or good cause that could benefit from our help? Then use the contact us form to let the team
        know.</font></p>
<?php
  if($suppressCost) { # keep costs off sit for now
?>
         <p>Advance discounted fireworks tickets will be available late September onwards from
        the local shops</p>        
        <p>... and through several local schools</p>

<?php
  }
  else { 
?>     
        <p>The event is one of the highlights in the Ascot calendar. The all weather location, with easy access,
        excellent parking and fantastic fireworks display 
        will make this year better than ever before.</p>
		
		<p>Tickets, &pound;<?php echo $adultGate; ?> for adults and &pound;<?php echo $childGate; ?> for children,
        are available at the gate on the night. See <a href="details.php">details</a> page for ticket rules.</p>
        
         <p><strong><font color="red">Advance discounted fireworks tickets will be available from early October from
        the following local shops (list TBC):<br>(&pound;<?php echo $discount; ?> per ticket discount)</font></strong></p>
        <img class="right" src="images/smallboom.gif" alt="boom">
        
        <ul>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.40358,-0.6718" title="Show map">Swinley Stores (old PO), Brockenhurst Rd, South Ascot</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4108,-0.6736" title="Show map">C.E. Lewis Family Butchers, High Street, Ascot</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4197,-0.6936" title="Show map">Apollo News (Costcutter), Fernbank Rd, N. Ascot</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.424,-0.682" title="Show map">Londis, New Road, North Ascot</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.3927,-0.6273" title="Show map">Lewis of Sunningdale, Chobham Rd, Sunningdale</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4007,-0.656" title="Show map">Chapmans The Ironmongers, High St., Sunninghill</a></li>
<!--          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.3672,-0.7943" title="Show map">The Toy Box, High St., Crowthorne</a></li>  -->
<!--          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4074,-0.762" title="Show map">The Post Office, Wildridings, Bracknell</a></li> -->
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4163,-0.7484" title="Show map">MS Cheney Newsagents, High St., Bracknell</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4828,-0.6088" title="Show map">Windsor Tourist Information Centre, Royal Windsor Shopping Centre, Windsor</a></li>
        </ul>
        <p><strong><font color="red">Got a child in a local school? Buy tickets through the school and the school
        will receive 15% of the sales value.</font></strong></p>
    
        <p>Tickets can be bought through the following local schools<br>
        <font color="blue">St Mary's (Winkfield), Ascot Heath (Junior &amp; Infant), Cranbourne County, Ascot & Cranbourne Pre-School<br>
		Charters (Sunningdale), Papplewick, LVS (Ascot), Cheapside Primary, South Ascot Village, St Francis (S Ascot)<br>
		St Michaels (Sunninghill), Holy Trinty (Sunningdale), Queen Anne (Windsor) & The Royal School (Windsor)</font><br><br>
		<b>New for 2017 - you will be able to buy tickets that support your school via the on-line ticket portal.</b><br>
		See the leaflet that will be in school bags or sent via ParentMail early October for details. The school page can also be accessed <a href="school" title="Schools Page">here</a></p>
<?php
  } # end of costs section
?>
<?php
  if ($suppressOnlineTickets) {
?>
        <p class="red"><!-- <img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22"> -->
        Tickets will be available for purchase on-line from early-mid October.</p>
<?php
  }
  else {
?>
        <p class="red"><!-- <img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22"> -->
        Tickets now available for purchase on-line.
       <!--  <img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22"> --><br>
        <!--  <img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22"> -->
        Look at the <a href="oltickets.php">details</a> page for further information.
        <!--  <img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22"> --></p>
<?php
  }
?>
        
        <p class="red">Jump the queues and make use of fast track entrance to the event by buying tickets in advance</p>
        <p>Check our twitter feed for the latest news - <a target="twitter" href="https://twitter.com/ascot_fireworks" title="Twitter">@ascot_fireworks</a></p>
      </td>
<?php
  }
  else { #post event message
?>
      <td width="85%">
        <p><strong>The organisers would like to thank everyone for their support and assistance in 
        making this year's event run successfully.</strong></p>
        
        <p>We're already starting to plan next years event. Please check
        the website for further details nearer the time.</p>
       
        <p>If you have any comments or suggestions you'd like to share with us, please <a href="contact.php">contact us</a>.</p>
        
        <br>
        <p><strong>If your company would like to sponsor next years event please <a href="contact.php">contact us</a>.</strong></p>
        <br><br>  
		
		<p>Each year we get asked what tracks formed the music sound track for the event. 2017's list is:
		<ul>
			<li>Shooting Start</li>
			<li>Love Me Again</li>
			<li>This ones for you</li>
			<li>Despactio (Remix)</li>
			<li>One day I'll fly away</li>
			<li>On top of the world</li>
			<li>Hello</li>
			<li>One last time</li>
			<li>It's my life</li>
			<li>Hallelujah</li>
		</ul>
		</p>
		
      </td>
<?php
  }
?>
    </tr><!-- main section footer area -->
    <tr>
      <td></td>
      <td>
        <p class="small">
          This event is organised by <a href="http://www.ascotroundtable.org.uk">Ascot Round Table</a>,
          which is affiliated to the National Association of Round Tables of Britain &amp; Ireland
          <a href="http://www.roundtable.co.uk">www.roundtable.co.uk</a> Ascot Round Table
          is registered with the Charity Commission, number 1057937.
        </p>
      </td>
    </tr>
  </table>
  <br>
  </body>
</html>
