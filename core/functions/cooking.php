<?php
function minutesToNextApp($userID){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (userID = $userID) AND (starttime > NOW()) ORDER BY starttime ASC LIMIT 1");
	

	if (mysql_num_rows($result) == 0){
		echo 'No recipes found';
	} else {
	while($row = mysql_fetch_array($result)){
		$nextEvent = strtotime($row['starttime']);
		}
	$currentTime = time(); 
	return (int)(($nextEvent-$currentTime)/60-120);
	}	


}

function getRecipes($min){
	$result = mysql_query("SELECT * FROM `UCPM_recipes` WHERE cookingtime < $min");
	if (mysql_num_rows($result) == 0){
		echo 'No recipes found';
	} else {
		while($row = mysql_fetch_array($result)){
			echo '<a href="cooking_detail.php?id='.$row['recipeID'].'">';
			echo '<article class="info_list"><div class="info_pic"><img src="img/recipes/'.$row['picture'].'" height="80"></div><div class="info_container"><div class="info_title">'.$row['title'].'</div><div class="info_extra">'.$row['cookingtime'].' min</div></div></article>';
			echo '</a>';
			}
	}	
}


function recipeDetail($id, $info){
	$result = mysql_query("SELECT * FROM `UCPM_recipes` WHERE recipeID = $id");
	while($row = mysql_fetch_array($result)){
		return $row[$info];
		}
	}


?>