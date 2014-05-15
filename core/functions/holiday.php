<?php 
	function checkForUpcomingHolidays($date) {
		//todo
	}
	
	function checkForProfessionalAppointments($day, $month, $year, $userID){
		$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) = '$year-$month-$day') AND label='professional' AND userID=$userID");
		if (mysql_num_rows($result) > 0){
			return true;
		} else {
			return false;
		}
	}

	function checkForChildren($userID) {
		$result = mysql_query("SELECT * FROM `UCPM_employees` WHERE kids < 0 AND userID=$userID");
		if (mysql_num_rows($result) > 0){
			return true;
		} else {
			return false;
		}
	}

	function getAllMyPlannedHolidays($day, $month, $year, $userID) {
		$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) = '$year-$month-$day') AND userID=$userID AND label='holiday' ORDER BY starttime ASC");
		if (mysql_num_rows($result) == 0){
			return false;
			echo '<li><div class="empty">No holiday(s) planned for this day…</div></li>';
		} else {
			while($row = mysql_fetch_array($result)){
				return true;
				echo '<li><div class="time">'.timestampToHours($row['starttime']).' till '.timestampToHours($row['endtime']).'</div><div class="title">'.$row['title'].'</div><div class="location">'.$row['location'].'</div></li>';
			}
		}	
	}


	function getMyPlannedHolidays() {
		$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE label='holiday' AND userID=$userID");
		if (mysql_num_rows($result) > 0){
			return true;
		} else {
			return false;
		}
	}

?>