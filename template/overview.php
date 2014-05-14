<section class="index">

<div class="thisday">
	<h1>Today</h1>
	<h2><?php echo date("D").' '.date("j").' '.date("F");?></h2>
	<ul>
		<?php getAppointments(date("j"), date("n"), date("Y"), $userID) ?>
	</ul>
</div>

<div class="snooze_container">
	<a href="snooze.php" alt="">
		<div class="snooze red">
			Snoesje
		</div>
	</a>
</div>

</section>