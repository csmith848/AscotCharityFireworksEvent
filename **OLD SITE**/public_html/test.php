<?php 
require 'logic.php';

// Simple visit counter

$file = 'count.txt';
$current = file_get_contents($file);
$count=intval($current);
$count++;
$current=strval($count);
file_put_contents($file, $current);

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

<!-- page header section -->
  <table cellpadding="0" cellspacing="0" border="0">
    <tr>
	    <td class="top">
	      <a href="http://www.roundtable.co.uk"><img src="images/rtlogo.gif" ALT="Round Table Logo"></a>
	      <br>
	      <a href="http://www.ascot.co.uk" target="_blank"><img src="images/smallascotrcltd.gif" ALT="Ascot Racecourse Ltd"></a>
	    </td>
      <td>
        <img src="images/smallrocket.gif" alt="rocket">
	    </td>
	    <td>
	      <h2><a class="head" href="http://www.ascotroundtable.org.uk">Ascot Round Table</a></h2>
	      <h4>presents</h4>
	      <h1>ASCOT CHARITY FIREWORKS EVENT</h1>
	      <h3>Saturday 31st October</h3>
	    </td>
	    <td>
	      <img src="images/smallrockets.gif" alt="rocket">
	    </td>
	    <td></td>
	    <td>
	      <img src="images/starfireworks.gif" alt="Star Fireworks">
	    </td>
	  </tr>
  </table>

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
        <p><strong>Come and join us for the 2013 Ascot Charity Fireworks event.<br><br>
        This popular event will again be held in the excellent all weather Racecourse Grandstand.<br>
<!--         <font color="red">Remember to dress for the occasion, with prizes for children in fancy dress that scare us the most !</font></strong></p> -->
        
        <p><strong>The event will follow the United House Day race meeting.</strong><br></p>
        
        <p><strong><font color="red">We are pleased to announce following the last several years of excellent displays that Star Fireworks, one of the countries
        leading display companies and winners of the 2010 &amp; 2013 British Fireworks Championships, will once again be both sponsoring the event and providing what
        promises to be an even larger &amp; greater show this year.</font></strong></p>
        
        <p><strong>For Car Parking arrangements.</strong> Please look at <a href="directions.htm">directions</a>
        for details.</p>
        
        <p>On 2<sup>nd</sup> November 2013, Ascot Round Table is organising a Charity Fireworks Display
        hosted at Ascot Racecourse. Firework admissions from 4:00pm and the fireworks
        display starts at 6.00 pm.<br/>
        In addition to the fireworks there will also be a Fun Fair with wide range of rides. Also
        food, drink and licensed bars available.</p>
        
        <P><font color="red">All proceeds from buying an Ascot Round Table fireworks ticket support local charities.
        Know a local charity or good cause that could benefit from our help? Then use the contact us form to let the team
        know.</font></p>

<?php
  if($suppressCost) { # keep costs off sit for now
?>
         <p>Advance discounted fireworks tickets will be available late September onwards from
        the local shops at a £1 per ticket discount</p>        
        <p>... and through several local schools</p>


<?php
  }
  else { 
?>     
        <p>The event is one of the highlights in the Ascot calendar. The all weather location, with easy access,
        excellent parking and fantastic fireworks display 
        will make this year better than ever before. Tickets, £7 for adults and £5 for children,
        are available at the gate on the night.</p>
        
        <p><strong><font color="red">Got a child in a local school? Buy tickets through the school and the school
        will receive 15% of the sales value.</font></strong></p>
    
         <p>Advance discounted fireworks tickets will be available from early October from
        the following local shops:<br>(£1 per ticket discount)</p>
        <img class="right" src="images/smallboom.gif" alt="boom">
        
        <ul>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.40358,-0.6718" title="Show map">Swinley Stores (old PO), Brockenhurst Rd, South Ascot</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4108,-0.6736" title="Show map">C.E. Lewis Family Butchers, High Street, Ascot</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4169,-0.6989" title="Show map">The Late Shop, Warren Row, North Ascot</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.424,-0.682" title="Show map">Londis, New Road, North Ascot</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.3927,-0.6273" title="Show map">Lewis of Sunningdale, Chobham Rd, Sunningdale</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4007,-0.656" title="Show map">Chapmans The Ironmongers, High St., Sunninghill</a></li>
<!--          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.3672,-0.7943" title="Show map">The Toy Box, High St., Crowthorne</a></li>  -->
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4074,-0.762" title="Show map">The Post Office, Wildridings, Bracknell</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4163,-0.7484" title="Show map">MS Cheney Newsagents, High St., Bracknell</a></li>
          <li><a target="map" href="http://maps.google.co.uk/maps?q=51.4828,-0.6088" title="Show map">Windsor Tourist Information Centre, Royal Windsor Shopping Centre, Windsor</a></li>
        </ul>

        <p>... and through the following local schools (until 24<sup>th</sup> October)<br>
        <font color="blue">Warfield C of E, Whitegrove Primary (Warfield), St Mary's (Winkfield), Ascot Heath, Cranbourne County, Charters (Sunningdale) <br>
        Papplewick, LVS (Ascot), Cheapside Primary, South Ascot Village, St Francis (S Ascot), St Michaels (Sunninghill)<br>
        Holy Trinty (Sunningdale), Queen Anne (Windsor) & The Royal School (Windsor)</font></p>

<?php
  } # end of costs section
?>
<?php
  if ($suppressOnlineTickets) {
?>
        <p class="red"><img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22">
        Tickets will be available for purchase on-line from early October.</p>
<?php
  }
  else {
?>
        <p class="red"><img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22">
        Tickets now available for purchase on-line with no transaction fees.
        <img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22"><br />
        <img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22">
        Look at the <a href="oltickets.php">details</a> page for further information.
        <img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22"></p>
<?php
  }
?>
        
        <p class="red">Jump the queues and make use of fast track entrance to the event by buying tickets in advance</p>
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
       
        <p>If you have any comments or suggestions you'd like to share with us, please <a href="contact2.htm">contact us</a>.</p>
        
        <BR>
        <p><strong>If your company would like to sponsor next years event please <a href="contact2.htm">contact us</a>.</strong></p>
        <BR><BR>        
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













