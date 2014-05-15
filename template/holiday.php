<?php 
	$curdate = time();
	$curday = date('d', $curdate);
	$curmonth = date('m', $curdate);
	$curyear = date('Y', $curdate);

	$date = $year.'-'.$month.'-'.$day;

	$bufferdays = 7;
	$bufferdate = date('Y-m-d', strtotime($bufferdate) + (24*3600*$bufferdays));

	
	if(checkForProfessionalAppointments($date, $bufferdate, $userID) == true) {
		echo 'bro you are good to go!';
	} else {
		
		echo 'bro you still have appointment(s)';
	}

	if((checkForChildren) == true){
		echo 'you are lonely bro';
	} else {
		
		echo 'you have kids bro';
	}
?>