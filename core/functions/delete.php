<?php

	function deleteEvent($day, $month, $year, $time, $userID){
		$q = "DELETE * FROM `UCPM_appointments` WHERE (TIME(starttime) < '$time') AND (TIME(endtime) > '$time') AND (DATE(starttime) = '$year-$month-$day') AND (userID='$userID')";
		$result = mysql_query($q) or die(mysql_error());
		//echo $q;

}
?>