<!DOCTYPE html>
<html>
<head>
	<title>question2</title>
</head>
<body>
	
	<h1> While Loop</h1>
	<?php
	
$i=1;
while ($i<10) {
 echo "abc ";
	$i++;	
}

?>

<h1>Do while Loop</h1>
<?php
$a=1;
 do {
	echo "xyz";
	$a++;
}while ($a<11) ;

?>

<h1>For Loop</h1>
<?php
for($b=1;$b<10;$b++){
	echo $b." " ;
	echo "</br>";
}

?>
<h1></h1>
<?php

for($c="A";;$c++){
	if ($c>="G") {
		break;
	}
	echo "Item ";
	echo "$c";
	echo "</br>";
}
?>






</body>
</html>