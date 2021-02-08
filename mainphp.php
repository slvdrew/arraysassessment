<?php
	$names = array("Jim Halpert" => "Jim apparently has a crazy amount of beer in his office drawer.", "Pam Beesly" => "Pam doesn't like her new neighbors in her new neighborhood.","Dwight Schrute" => "Dwight likes to illegally hunt wild turkey.","Toby Flenderson" => "It seems that Toby acquired an unusual taste for Pizza Beer... gross. ","Michael Scott" => "People have been saying that Michael Scott picks his earwax and eats it in secret... again, gross.");

	foreach($names as $x => $val) {
		echo  "$x = $val<br>";
	}
	
	echo "<br>";
	
	$valenciaCollege = array("Name" => "Valencia College", "President" => "Sandy Shugart", "Motto" => "We Say You Can.", "Established" => "1967", "Colors" => "Red and Gold", "Mascot" => "Matador");
	
	foreach($valenciaCollege as $x => $val) {
		print  "$x = $val<br>";
	}