<html>
    <head>
        <title>Read</title>
    </head>
    <body>
        <?php
        $servername = "localhost";//服务器名称//
		$username = "root";//用户名称//
		$password = "";//密码//
		$dbname = "clothes";//数据库（文档）名称//


            $connection  = new mysqli($servername, $username, $password, $dbname);
            if ($connection->connect_error){
                die("Connection Failed: " .$connection->connect_error);
            }
            else{

                $sql = "SELECT * FROM user";//选择数据库中的用户表格//
                $result = $connection->query($sql);

                if ($result->num_rows > 0){
                    print "<table>
                                <tr>
                                    <td><b>ID</b></td>
                                    <td><b>name</b></td>
                                    <td><b>password</b></td>
                                    <td><b>Modify</b></td>
                                    <td><b>Modify</b></td>
                                </tr>";//制作一个表格//
                    while($row = $result->fetch_assoc()){
                        print "<tr>
                                    <td>".$row['ID']."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['password']."</td>
                                    <td><a href='update.php?ID=".$row['ID']."'>Update</a></td>
                                    <td><a href='delete.php?ID=".$row['ID']."'>Delete</a></td>
                                </tr>";//连接数据库中的表格//
                    }
                    print "</table>";

                }

            }
        ?>
    </body>
</html>