<!DOCTYPE html>
<html>
<head>
	<title>question4</title>
</head>
<body>
<?php


echo "<table  cellspacing='0' align='center' width='400px' border = '1'bordercolor='black' >";
for ($row=1;$row<=8;$row++){
	echo "<tr>";
	for ($col=1;$col<=8;$col++){	
		if(($row+$col)%2){
			echo "<td height='40px' bgcolor='black'>";
		}else{
			echo "<td></td>";
			}
		}
	echo "</tr>";
}
echo "</table>";


?>
</body>
</html>