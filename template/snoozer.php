<?php
// Huidige tijd
	$curdate = time (); 
	$curday = date('d', $curdate); 
	$curmonth = date('m', $curdate); 
	$curyear = date('Y', $curdate);
	$curhour = date('H', $curdate);
	$curhour = $curhour + 1;
	$curhour= sprintf("%02s", $curhour);
	$snoozehour = date('H', $curdate);
	$snoozehour = $snoozehour + 5;
	$snoozehour= sprintf("%02s", $snoozehour);
	$curminute = date('i', $curdate);
	$cursecond = date('s', $curdate);
	$curtime = $curhour.':'.$curminute.':'.$cursecond;
	$snoozetime = $snoozehour.':'.$curminute.':'.$cursecond;
?>

<section class="index">
	<?php 
deleteEvent($curday, $curmonth, $curyear, $curtime, $snoozetime, $userID);
	/*if(deleteEvent($curday, $curmonth, $curyear, $curtime, $snoozetime, 1) == true) {
			echo '<p class="succes">Your appointments for the upcoming <b>2</b> hours have been removed.</p>';
	}	else {
			echo '<p class="succes">You had no appointments to remove.</p>';
		}
	*/ ?>
	
</section>