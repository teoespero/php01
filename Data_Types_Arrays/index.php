<!-- 

Teodulfo Espero
BS Cloud and Systems Administration
Western Governors University 

-->

<! DOCTYPE html>
<html lang="en">
<html>
	<head>	
			<meta charset="utf-8">
			<title>teoespero.com | PHP Programming</title>
			<meta name="description" content="">
  			<meta name="author" content="teoespero">
	</head>
	<body>
		<?php

			// define constants
			define("_NEWLINE", "<br>");
			define("_SPACER", " ");
			define("_BOLDSTART", "<strong>");
			define("_BOLDEND", "</strong>");
			define("_ITALICSTART", "<em>");
			define("_ITALICEND", "</em>");
			
			

			
			echo _BOLDSTART . "ARRAYS" . _BOLDEND . _NEWLINE . _NEWLINE;

			$grades = array(85,78,54,96,89,83,100);
			$sum= 0;

			echo "Grades:" . _NEWLINE;

			foreach ($grades as $grade) {
				echo $grade . _NEWLINE;
			}

			foreach ($grades as $grade) {
				$sum = $sum + $grade;
			}			

			$average = $sum / count($grades);
			echo "Average:" . _SPACER . number_format($average,2);
		?>
	</body>
</html>

