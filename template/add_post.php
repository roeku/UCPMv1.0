<section class="index">
<?php
	$title = $_POST['title'];
	$location = $_POST['location'];
	$start = $_POST['date_year'] . '-' . $_POST['date_month'] . '-' . $_POST['date_day'] . ' ' . $_POST['start_hour'] . ':' . $_POST['start_min'] . ':00';
	$end = $_POST['date_year'] . '-' . $_POST['date_month'] . '-' . $_POST['date_day'] . ' ' . $_POST['end_hour'] . ':' . $_POST['end_min'] . ':00';
	$invitee = $_POST['invitee'];
	$label = $_POST['label'];
	$moment = $_POST['start_hour'] . ':' . $_POST['start_min'] . ':00';
	$date = $_POST['date_year'] . '-' . $_POST['date_month'] . '-' . $_POST['date_day'];

	postEvent($userID, $title, $location, $start, $end, $invitee, $label);
	postEvent($invitee, $title, $location, $start, $end, $userID, $label);
	echo '<p class="succes">Event added to your and your invitees agenda.</p>';

/*if (amIInAnAppointment($moment, $date, $userID)==false && amIInAnAppointment($moment, $date, $userID)==false && $invitee!=0){
	postEvent($userID, $title, $location, $start, $end, $invitee, $label);
	postEvent($invitee, $title, $location, $start, $end, $userID, $label);
	echo '<p class="succes">Event added to your and your invitees agenda.</p>';
}	else if (amIInAnAppointment($moment, $date, $userID)==false && amIInAnAppointment($moment, $date, $userID)==true && $invitee!=0){
	postEvent($userID, $title, $location, $start, $end, $invitee, $label);
	echo '<p class="succes">The event was added to your agenda. But your colleague seems to already be in an appointment. A mail was sent.</p>';
}	else if (amIInAnAppointment($moment, $date, $userID)==false && $invitee==0){
	postEvent($userID, $title, $location, $start, $end, $invitee, $label);
	echo '<p class="succes">The event was added to your agenda.</p>';
} else {
	echo '<p class="succes">The event could not be added, you already have an appointment planned at that time.</p>';
}*/
			
?>
</section>