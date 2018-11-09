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

			
			echo _BOLDSTART . "BASIC MATH FUNCTIONS" . _BOLDEND . _NEWLINE . _NEWLINE;

			$num01 = 10;
			$num02 = 30;
			$num03 = 50;

			$sum = $num01 + $num02 + $num03;

			echo _BOLDSTART . "Addition:" . _BOLDEND . _ITALICSTART . _SPACER . (string)$num01 . _SPACER . "+" . _SPACER . (string)$num02 . _SPACER . "+" . _SPACER . (string)$num03 . _SPACER . "=" . _SPACER . (string)$sum . _ITALICEND . _NEWLINE;

			$diff = $num03 - $num02 - $num01;
			echo _BOLDSTART . "Subtraction:" . _BOLDEND . _ITALICSTART . _SPACER . (string)$num03 . _SPACER . "-" . _SPACER . (string)$num02 . _SPACER . "-" . _SPACER . (string)$num01 . _SPACER . "=" . _SPACER . (string)$diff . _ITALICEND . _NEWLINE;

			$quotient = $num03 / $num01;
			echo _BOLDSTART . "Division:" . _BOLDEND . _ITALICSTART . _SPACER . (string)$num03 . _SPACER . "/" . _SPACER . (string)$num01 . _SPACER . "=" . _SPACER . (string)$quotient . _ITALICEND . _NEWLINE;

			$product = $num02 * $num01;
			echo _BOLDSTART . "Multiplication:" . _BOLDEND . _ITALICSTART . _SPACER . (string)$num02 . _SPACER . "*" . _SPACER . (string)$num01 . _SPACER . "=" . _SPACER . (string)$product . _ITALICEND . _NEWLINE;
		?>
	</body>
</html>

