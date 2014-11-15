<?php

	$dates = "2014-12-28";
	$dates = explode(',', $dates);

	$startDate = strtotime("2014-12-29");
	$endDate = strtotime("2015-01-05");

	$result = array();

	foreach ($dates as $day) {
		$day = strtotime($day);
		if ($day >= $startDate && $day <= $endDate) {
			$result['match'] = 1;
		}
	}

	if ($result['match']) {
		echo "Matched and count!";
	}

?>