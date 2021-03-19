<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
<?php
        $servername = "localhost";//服务器名称//
		$username = "root";//用户名称//
		$password = "";//密码//
		$dbname = "clothes";//数据库（文档）名称//

		$connection = new mysqli($servername, $username, $password, $dbname);
//连接数据库//
       if ($connection->connect_error){
                    die("Connection Failed: ".$connection->connect_error);
                }
                else{
                    echo "Connected successfully to the ".$dbname." database<br>";
                }
//检查连接数据库是否成功//

        $name = $_POST['name'];
        $password = $_POST['password'];
//连接exercise2的表格//

        $sql = "INSERT INTO user (name,password) VALUES ('$name', '$password')";
//输入表格名称（表格内容）将exercise2表格内容保存在数据库中//

        if($connection->query($sql)===TRUE){
            echo "New record created successfully";//输入正确并记录在数据库中//
        }else{
            echo "It's a pity that you failed";//输入错误//
        }

?>
</body>