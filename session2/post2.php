<!DOCTYPE html>
<html>
<head>
	<title>Exercise – Part 1</title>
</head>
<body>
<?php
        $servername = "localhost";//服务器名称//
		$username = "root";//用户名称//
		$password = "";//密码//
		$dbname = "classicmodels";//数据库（文档）名称//

		$connection = new mysqli($servername, $username, $password, $dbname);
//连接数据库//

	if ($connection->connect_error){
			die("Connection Failed: ".$connection->connect_error);
		}
		else{
			echo "Connected successfully to the ".$dbname." database<br>";
		}
//检查连接数据库是否成功//

		$query = "SELECT * FROM customers";//从顾客表单中选择内容//
		$result = mysqli_query($connection, $query);
//调取数据库中顾客的内容//

		if(mysqli_num_rows ($result) > 0){
			echo "<table>
					<tr><th>surname</th><th>city</th><th>country</th></tr>";
//制作表格//
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr><td>".$row["customerName"]."</td><td>".$row["city"]."</td><td>".$row["country"]."</td></tr>";
			}

			echo "</table>";
		}
//数据库中的表格//
		mysqli_close($connection);

	?>

</body>
</html>