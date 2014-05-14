<?php

// delete function for defined appointments with start & endtime
function deleteEvent($day, $month, $year, $time, $buffertime, $userID){
		$q = "DELETE FROM `UCPM_appointments` WHERE (TIME(starttime) > '$time') AND (TIME(starttime) < '$buffertime') AND (DATE(starttime) = '$year-$month-$day') AND (userID='$userID')";
	if (mysql_affected_rows($q) == 0){
		echo '<li><div class="empty">Nothing planned for this day…</div></li>';
		}	else {
	echo 'very good';
	$result = mysql_query($q) or die(mysql_error());
		echo $q;

}
}
?>
