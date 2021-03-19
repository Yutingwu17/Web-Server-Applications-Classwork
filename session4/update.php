<html>
    <head>
        <title>update</title>
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

                $sql = "SELECT * FROM user";
                $result = $connection->query($sql);
                }
        ?>
    </body>
</html>