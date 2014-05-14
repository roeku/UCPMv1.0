<?php
	$curmin = round((date('i')+5/2)/5)*5;
?>

<section class="index">
	<form id="add" action="add_post.php" method="post">
	<p>Title</p>
	<input type="text" name="title">
	<p>Location</p>
	<input type="text" name="location">
	
	
	<p>Date</p>
	<select name="date_day">
	<?php
		for ($i=1; $i<=31; $i++) {
			if ($i==date('d')){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select>
	
	<select name="date_month">
	<?php
		for ($i=1; $i<=12; $i++) {
			if ($i==date('m')){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.date('F', mktime(0, 0, 0, $i, 1)).'</option>';
			} else {
			echo '<option value="'.sprintf("%02s", $i).'">'.date('F', mktime(0, 0, 0, $i, 1)).'</option>';
			}
		}
	?>
	</select>
	
	<select name="date_year">
	<?php
		for ($i=2014; $i<=2050; $i++) {
			echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
		}
	?>
	</select>
		
	<p>Start Time</p>
	<select name="start_hour">
	<?php
		for ($i=0; $i<24; $i++) {
			if ($i==date('h')+2){
				echo '<option value="'.sprintf("%02s", date('h')).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select>
	
	<select name="start_min">
	<?php
		for ($i=0; $i<60; $i=$i+5) {
			if ($i<$curmin){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select><br/>
	
	<p>End Time</p>
	<select name="end_hour">
	<?php
		for ($i=0; $i<24; $i++) {
			if ($i==date('h')+3){
				echo '<option value="'.sprintf("%02s", date('h')).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select>
	<select name="end_min">
	<?php
		for ($i=0; $i<60; $i=$i+5) {
			if ($i<$curmin){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select>
	
	<p>Invitees</p>
	<select name="invitee">
		<?php listEmployees($userID);?>
		<option value="0">None</option>		
	</select>
	
	<p>Label</p>
	<select name="label">
		<option value="professional" selected="selected">Professional</option>
		<option value="private">Private</option>
	</select> <br/>

	</form>
</section>

