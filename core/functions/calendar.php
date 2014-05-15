<?php
function getAppointments($day, $month, $year, $userID){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) = '$year-$month-$day') AND (TIMESTAMP(endtime) > CONVERT_TZ(NOW(),'+00:00','+2:00')) AND userID=$userID ORDER BY starttime ASC");
	if (mysql_num_rows($result) == 0){
		echo '<li><div class="empty">Nothing planned for this day…</div></li>';
	} else {
		while($row = mysql_fetch_array($result)){
			echo '<li><div class="time">'.timestampToHours($row['starttime']).' till '.timestampToHours($row['endtime']).'</div><div class="title">'.$row['title'].'</div><div class="location">At '.$row['location'].'</div></li>';
			}
	}	
}

function getAllAppointments($day, $month, $year, $userID){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) = '$year-$month-$day') AND userID=$userID ORDER BY starttime ASC");
	if (mysql_num_rows($result) == 0){
		echo '<li><div class="empty">Nothing planned for this day…</div></li>';
	} else {
		while($row = mysql_fetch_array($result)){
			echo '<li><div class="time">'.timestampToHours($row['starttime']).' till '.timestampToHours($row['endtime']).'</div><div class="title">'.$row['title'].'</div><div class="location">'.$row['location'].'</div></li>';
			}
	}	
}

/*
function meetingsTogether(){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) = '$year-$month-$day') AND inviteesID!=0")
}
*/

/*function checkDayForPrivateAppointment($day, $month, $year){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) = '$year-$month-$day') AND label='private' AND userID=1");
	if (mysql_num_rows($result) > 0){
		$matchFound='<a>&bull;</a>';
	} else {
		$matchFound='<a>&thinsp;</a>';
	}
	return $matchFound;
}

function checkDayForProfessionalAppointment($day, $month, $year){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) = '$year-$month-$day') AND label='professional' AND userID=1");
	if (mysql_num_rows($result) > 0){
		$matchFound='<a>&bull;</a>';
	} else {
		$matchFound='<a>&thinsp;</a>';
	}
	return $matchFound;
}

--deletebutton in getAllappointment--
<li><div class="delete"><input type="submit" name="deleteItem" value="'.$row['userID'].'"/></div></li>
*/
?>