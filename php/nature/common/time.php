<?php
/*time.php
Returns server time in response to an AJAX request
*/

$date = date("l, F jS");
$time = date('g:ia');
$greetingColor = "black";

$colorPicker = rand(1, 4);
if ($colorPicker == 1) 
     $greetingColor = "red";
else if ($colorPicker == 2)
     $greetingColor = "green";
else if ($colorPicker == 3)
     $greetingColor = "blue";
else
     $greetingColor = "maroon";

echo "<p hidden id='colorChoice'>$greetingColor</p>";
echo $_SESSION['pageRefreshCount'];
echo "It's $date.<br>
     Our time is $time.";
?>
