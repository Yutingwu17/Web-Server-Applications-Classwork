<!DOCTYPE html>
<html>
<head>
	<title>Question 7</title>
</head>
<body>

	<?php

		// String (or Text)
		$whatis = "Richard";
		echo "Value is ". gettype($whatis)."<br/> \n";

		// Double (A number with a decimal place after it)
		$whatis = 88.9;
		echo "Value is ". gettype($whatis)."<br/> \n";

		//Boolean (True or False)
		$whatis = true;
		echo "Value is ". gettype($whatis)."<br/> \n";

		// Integer (or whole number)
		$whatis = 10;
		echo "Value is ". gettype($whatis)."<br/> \n";

		// Null (or Empty)
		$whatis = null;
		echo "Value is ". gettype($whatis)."<br/> \n";

		// 'gettype(var)' shows what type of data is being stored in a variable.

	?>
</body>
</html>