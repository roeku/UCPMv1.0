<?php

// delete function for defined appointments with start & endtime
function deleteEvent($day, $month, $year, $time, $buffertime, $userID){
	foundAppointment($day, $month, $year, $userID);
		$q = "DELETE FROM `UCPM_appointments` WHERE (TIME(starttime) > '$time') AND (TIME(starttime) < '$buffertime') AND (DATE(starttime) = '$year-$month-$day') AND (userID='$userID')";
	$result = mysql_query($q) or die(mysql_error());
	checkDeleted($day, $month, $year, $userID);
}

// give feedback on deletion
function checkDeleted($day, $month, $year, $userID) {
	if(mysql_affected_rows() !== 0){
		echo '<p class="succes">You\'ve just cancelled '. mysql_affected_rows() . ' appointment(s). Your colleagues have been notified.</p>';
	} else {
		echo '<p class="succes">There are no appointments to be cancelled.</p>';
	}
}

function checkInvitees() {
	//to do
}

?>