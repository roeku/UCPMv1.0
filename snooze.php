<?php include('core/init.php');?>
<?php include('template/head.php') ?>

<body>
	<div id="st-container" class="st-container">
	BAM
	<?php deleteEvent($curday, $curmonth, $curyear, $curdate, 1);
		echo $curday;
		echo $curmont;
		echo $curyear;
		?>
	</div><!--st-container-->

<script src="js/classie.js"></script>
<script src="js/sidebarEffects.js"></script>

</body>
</html>