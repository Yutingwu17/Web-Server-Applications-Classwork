<!DOCTYPE html>
<html>
<head>
	<title>question1</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
     
     <?php

        $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "classicmodels";

		$connection = new mysqli($servername, $username, $password, $dbname);

         /*	if ($connection->connect_error){
			die("Connection Failed: ".$connection->connect_error);
		}
		else{
			echo "Connected successfully to the ".$dbname." database<br>";
		}
*/
       

        $sql = "SELECT productCode, productName,productLine ,quantityInStock FROM products ORDER BY productLine , productName ASC";

		$result = mysqli_query($connection, $sql);

		if (!$result){
			die("Database query failed. ");
		}
		else{
			echo "Database Query '$sql' Successfully Ran.<br>";
		}

        

        if(mysqli_num_rows($result) > 0){
			 echo "<table>
			          <tr><th>productCode</th><th>productName</th><th>productLine</th><th>quantityInStock</th><tr>";
			while($row = mysqli_fetch_assoc($result)){
			     echo "<tr><td>".ucfirst($row["productCode"])."</td><td>".ucfirst($row["productName"])."</td><td>".ucfirst($row["productLine"])."</td><td>".ucfirst($row["quantityInStock"])."</td>";
			}
		
		 echo"</table>";

}
     ?>



</body>
</html>