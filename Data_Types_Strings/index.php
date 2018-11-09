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
			define("_SPACER", "&nbsp;");
			define("_BOLDSTART", "<strong>");
			define("_BOLDEND", "</strong>");
			define("_ITALICSTART", "<em>");
			define("_ITALICEND", "</em>");

			$myName = "Teodulfo Espero";
			$myMajor = "BS Cloud and Systems Administration";
			$myUniversity = "Western Governors University ";

			$phrase = "Hello World!";


			echo $phrase . _NEWLINE . _NEWLINE;
			echo $myName . _NEWLINE;
			echo $myMajor . _NEWLINE;
			echo $myUniversity. _NEWLINE;

			// changing the case
			$myOriginalMessage = "THIS IS MY FIRST MESSAGE";

			echo _NEWLINE . _NEWLINE;
			echo _BOLDSTART . "My original message:" . _BOLDEND . _SPACER . _ITALICSTART . $myOriginalMessage . _ITALICEND . _NEWLINE;
			echo _BOLDSTART . "Lowercase:"  . _BOLDEND . _SPACER . _ITALICSTART . strtolower($myOriginalMessage) . _ITALICEND . _NEWLINE;
			echo _BOLDSTART . "Uppercase first character:". _BOLDEND . _SPACER ._ITALICSTART .  ucfirst(strtolower($myOriginalMessage)) . _ITALICEND . _NEWLINE;

			// more string functions
			$nextMessage = "The quick brown fox jumped over the lazy dog.";		

			echo _NEWLINE . _NEWLINE;
			echo _BOLDSTART . "Original Message:" . _BOLDEND ._SPACER . _ITALICSTART . $nextMessage . _ITALICEND . _NEWLINE;
			echo _BOLDSTART . "Original Length:" . _BOLDEND ._SPACER . _ITALICSTART . strlen($nextMessage) . _ITALICEND . _NEWLINE . _NEWLINE;

			$nextMessage = str_replace("fox", "horse", $nextMessage);

			echo _BOLDSTART . "New message:" . _BOLDEND . _SPACER . _ITALICSTART . $nextMessage . _ITALICEND . _NEWLINE;
			echo _BOLDSTART . "New Length:" . _BOLDEND ._SPACER . _ITALICSTART . strlen($nextMessage) . _ITALICEND . _NEWLINE;

		?>
	</body>
</html>

