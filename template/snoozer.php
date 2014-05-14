<?php
// Huidige tijd
	$curdate = time (); 
	$curday = date('d', $curdate); 
	$curmonth = date('m', $curdate); 
	$curyear = date('Y', $curdate);
	$curhour = date('G', $curdate);
	$curhour += 2;
	$snoozetime = date('G', $curdate);
	$snoozetime += 4;
	$curminute = date('i', $curdate);
	$cursecond = date('s', $curdate);
	$curtime = $curhour.':'.$curminute.':'.$cursecond;
?>

<section class="index">
	<?php deleteEvent($curday, $curmonth, $curyear, $curtime, $snoozetime, 1); ?>
	
</section>