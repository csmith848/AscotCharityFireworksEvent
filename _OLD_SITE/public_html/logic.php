<?php
// work out if we are past the event date or not. If past &future will be true, else false;

  $future=true;
  $dateString='2019/11/04 18:45';
  
  if(strtotime($dateString) < time()) {
     $future=false;
  }
  
// set all displayed dates and features
  $suppressCost=false;
  $suppressOnlineTickets=false;
  $suppressSchoolTickets=false;
	
  $dispyear='2017';
  $dispmonth='November';
  $dispdate='4';
  $dispstndth='th';
  $admission='4:30pm';
  $disptime='6:30pm';
  $onlineCutOffTime='4:00pm';
  $codeCutOffTime='2019/11/04 16:01';  // set to same as cut off time + 1 min -to save arguments
  $codedatetime='2019-11-04T18:15';
  $season='2017/18';
 
// prices
  $adultAdv='6.50';
  $adultGate='9.00';
  $childAdv='4.50';
  $childGate='7.00';
  $discount='2.50';
  
  
  $schoolCutoffDate='31<sup>st</sup> October';

// The linkurl, is the url to the online ticket website, i.e. the on eprovided by Ascot Racecourse
  $linkurl="https://tickets.ascot.co.uk/Connect/WebPages/EntaWebGateway/gateway.aspx?E=N&QL=W878|Y04112017|G~/WEBPAGES/Ascot/Admission.aspx";
  $schoolurl="https://tickets.ascot.co.uk/connect/WebPages/EntaWebGateway/gateway.aspx?E=N&QL=Y04112017|G~/WEBPAGES/Ascot/Admission.aspx";

// logic for end of online ticket sales
  $endTicketSales=false;
  if(time()>strtotime($codeCutOffTime)) {
	  $endTicketSales=true;
  }
  
?>
