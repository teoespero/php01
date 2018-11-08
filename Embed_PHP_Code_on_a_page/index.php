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
			define("NEWLINE", "<br>");
			define("SPACER", " ");

			// define the vars
			$myMessage = "Hello World";
			$myName = "Teo Espero";
			$age = date("Y") - 1976;

			// output our age and message
			echo $myMessage . SPACER . $myName . NEWLINE;
			echo "How are you doing?" .	NEWLINE;
			echo "I am" . SPACER . $age . SPACER . "years old.";
		?>
	</body>
</html>

