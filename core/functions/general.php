<?php
function timestampToHours($mysqltime){
	return date('H:i',strtotime($mysqltime));
}

function amIInAnAppointment($moment, $date, $userID){
	$command="SELECT * FROM `UCPM_appointments` WHERE (TIME(starttime) < '$moment') AND (TIME(endtime) > '$moment') AND (DATE(starttime) > $date) AND (userID=1)";
	
	$query = mysql_query($command);

	if (mysql_num_rows($query) > 0){
		return true;
	} else {
		return false;
	}
}

?>
