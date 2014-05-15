<?php
function getEmployee($user, $info){
	$result = mysql_query("SELECT $info FROM `UCPM_employees` WHERE userID=$user");
	while($row = mysql_fetch_array($result)){
		echo $row[$info];
		}
}

//get other peeps data
function getOthers($userID) {
	$result = mysql_query("SELECT * FROM `UCPM_employees` WHERE userID!=$userID");
	while($row = mysql_fetch_array($result)){
		
	}
}

?>