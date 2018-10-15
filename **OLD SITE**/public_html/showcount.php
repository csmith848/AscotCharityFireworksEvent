<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- written by Paul Nott August 2006 -->
<!-- updated to server side code Paul Nott 2013 -->
<html>
<body>

<?php 
// display visit and confirmed counts
$current = file_get_contents('count.txt');
echo "Visitors to the Home page: ".$current;

$current = file_get_contents('confirmed.txt');
echo "<br />Number of times oltickets confirmed: ".$current;

$current = file_get_contents('schools.txt');
echo "<br />Number of times schools confirmed: ".$current;
?>
  </body>
</html>












