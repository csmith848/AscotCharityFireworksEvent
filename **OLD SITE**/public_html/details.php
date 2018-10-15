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
  <table width="970">
    <tr>
      <td width="15%" class="top">
        <script type="text/javascript">menu(2)</script>
      </td>
  <!-- main page section - note part of same table as menu -->      
      
      <td width="85%" class="top">
        <p class="boldcentre">Spectacular Fireworks set to music</p>
        <!-- <p class="boldcentre">Halloween themed evening, with spot prizes for children in fancy dress that scare us the most</p> -->
        <p class="boldcentre">Ascot Racecourse Grandstand, Ascot</p>
        <p class="boldcentre">Gates open <?php echo $admission; ?>, Fireworks start <?php echo $disptime; ?></p>
        <table width="100%">
          <tr>
            <td align="center">
              <table>
                <tr>
                  <td class="prices" align="left">
              Prices at gate
                  </td>
                  <td>&nbsp;</td>
                  <td class="prices">
<?php
  if ($suppressCost) {
?>
              Prices TBC
<?php
  }
  else {
?>
              Adults &pound;<?php echo $adultGate; ?>, Children &pound;<?php echo $childGate; ?>, under 5 free
<?php
  }
?>
                  </td>
                </tr>
                <tr>
                  <td class="prices" align="left">
              Prices in advance
                  </td>
                  <td></td>
                  <td class="prices">
<?php
  if ($suppressCost) {
?>
              Prices TBC
<?php
  }
  else {
?>
              Adults &pound;<?php echo $adultAdv; ?>, Children &pound;<?php echo $childAdv; ?>, under 5 free
<?php
  }
?>
                  </td>
                </tr>
<?php
  if ($suppressCost) {
?>
                <tr><td></td><td></td><td align="left">&nbsp;</td>
<?php
  }
  else {
?>
                <tr><td></td><td></td>
                <td align="left">
                  Adult tickets for age 13+, Children 5-12 years old.<br>Under 5's do not require a ticket<br>Under 18's must be accompanied by an adult
                </td>
<?php
  }
?>
                <tr>
                  <td colspan=3 class="prices">
                  <br>Bypass the queues and make use of fast track entrance<br>to the event by buying tickets in advance
                  <br><br>Buy through your local school and they receive 15% of the sale price
                  </td>
                </tr>
                <tr>
                  <td colspan=3 align="left">
<?php
  if ($suppressOnlineTickets) {
?>
                    <b>Tickets will be available to purchase on-line soon.</b><br>
                    Please check the website again for further details.<br>
<?php
  }
  else {
?>
                    <b>Tickets are now available to purchase on-line.</b><br>
                    Click <a href="oltickets" title="Online tickets">here</a> to be directed to our on-line ticket portal or <a href="school" title="Schools Page">here</a> for the schools version.<br>
<?php
  }
?>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        
        <p><b><span class="xlarge">Ascot Charity Fireworks Event is organised by Ascot Round Table.</span><br>
        <span class="redxlarge">Only tickets purchased from Ascot Round Table or through one of its resellers raise money for charity.</span></b><br>
        These tickets are available from local shops and schools as listed on the home page.
<?php
  if ($suppressOnlineTickets) {
?>
        They can also be purchased in advance via our online ticket portal or alternatively at the gate on the night.
<?php
  }
  else {
?>
        Tickets will be available via our online ticket portal from early October or alternatively at the gate on the night.
<?php
  }
?>
        <br><br>
        Race day ticket holders my stay and watch the event, but these tickets do not contribute to charity.
        </p>

        <p class="boldcentre">Free car parking in Car Park 5A.<br>
        Disabled parking available for disabled badge holders.<br>
		Check local signs and directions provided on the night as<br>
		additional car parks may be utilised if busy.</p>
        
        <br>
        
        <p>This year the fireworks viewing will take place from the Grandstand of Ascot Racecourse.
        This fabulous location will provide the best view of the largest show ever to be held by the organisers.
        In addition there will be a fun fair. Food, drinks and licensed bars are also available.</p>
      
        <p><a href="http://www.ascotroundtable.org.uk">Ascot Round Table</a> is a local organisation
        with International links and raises funds for local charities through this Fireworks
        event, the Christmas Santa Sleigh, Golf Tournament and other fundraising activities.</p>
        <p>Charities and organisations that have benefited from the event in the past include:<br>
        <a href="http://www.sportsable.co.uk/" target="_blank">SportsAble</a><br>
        Chandler Day Centre, Sunninghill<br>
        <a href="https://www.tvairambulance.org.uk/" target="_blank">Thames Valley Air Ambulance</a><br>
        <a href="http://www.thameshospice.org.uk/" target="_blank">Thames Hospicecare</a><br>
        Charters Youth & Community Centre<br>
        Youth Speaks<br>
        Young Chef<br>
        <a href="http://www.macmillan.org.uk/" target="_blank">Macmillian</a><br>
        We also support a number of smaller applications and individual cases.<br>
        If you'd like us to consider an application please use the <a href="contact">contact us</a> page.
        </p>
      </td>

    </tr>
  </table>
  <br>

  </body>
</html>















