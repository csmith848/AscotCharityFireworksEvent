<?php 
require('logic.php');
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
</head>

<body>

<?php
require 'pageheader.php';
?>

<!-- left menu section -->  
  <table width="100%">
    <tr>
      <td width="15%" class="top">
        <script type="text/javascript">menu(4)</script>
      </td>

  <!-- main page section - note part of same table as menu -->      
      
      <td width="85%" class="top">
      <h5>Ascot Fireworks News <?php echo $dispyear; ?></h5>
      <p><b>Fantastic viewing from Ascot Racecourse Grandstand!</b><br>
      Kindly hosted by Ascot Racecourse<br>
      Safe and easy access and sheltered from the weather</p>
	  
	  <p><b>New for 2017 - you will be able to buy tickets that support your school via the on-line ticket portal.</b><br />
	  See the leaflet that will be in school bags or sent via ParentMail early October. No half-term closure to worry about!</p>
	  
      <p class="bold">
      <!-- <img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22"> -->
      <font color="red">Star Fireworks, winners of the 2013 British Firework Championships Champion of Champions and<br>
      British Firework Championships in 2010 will again be wowing the crowds.<br>
      <img src="http://www.nov5.co.uk/images/Plymouth%20Setup%207.jpg" border="0" alt="Star fireworks">
      <img src="http://www.nov5.co.uk/images/Resize%20of%20Plymouth%20Setup%206.jpg" border="0" alt="Star fireworks"><br>
      To learn more about the team go to the <a href="http://www.starfireworks.co.uk" target="star">Star Fireworks web site</a><br>
      Andy Hubble, the designer of the winning display for Star Fireworks, will be designing<br>
      the show again for us at Ascot this year. </font></p>


      <p class="bold">
      Largest display ever to be held.</p>

      <p class="bold">FREE car parking in car park 5A.</p>

      <p class="bold">
      Fun fair with wide range of rides and entertainment.</p>
      
      <p class="bold">
      Food, drinks and licensed bars available.<br>
      Following feedback, fast food prices reduced - see refreshments for details</p>

      <p class="bold">Easier access for wheel chairs, disabled and childrens' push chairs.</p>

<?php
  if ($suppressOnlineTickets) {
?>
      <p class="bold">
      Tickets will be available to purchase on-line from early October.<br>
      Please check the website again for further details.<br></p>
<?php
  }
  else {
?>
      <p class="bold">
      Tickets now available to purchase online. Visit our <a href="oltickets.php">details</a> page for more information.<br>
      <img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22">
      <span class="red">No transaction fees for using the online ticket portal.</span>
      <img src="images/smallnew.gif" alt="[New!]" border="0" width="35" height="22"><br>
<?php
  }
?>      
      </td>
    </tr>
  </table>
  
<br> 
</body>
</html>



















