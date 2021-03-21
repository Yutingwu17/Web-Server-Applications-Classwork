<html>
    <head>
        <title>delete</title>
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

        if ($_SERVER["REQUEST_METHOD"]=="POST" AND isset($_POST['confirm'])){


		$sqldelete = 'DELETE FROM user WHERE ID = '.$_GET['ID'];

	if ($connection->query($sqldelete)===TRUE){
        echo "New record delete successfully. <a href='exercise3.php'>Click Here </a> to navigate back to the main menu.";
     }
     else{
        echo "Unfortunatly we couldn't delete the record!";
     }

	}

	else{
		?>
			<form action="delete.php?ID=<?php echo $_GET['ID'];?> "method='post'>
					
			<label>Please confirm you want to delete the user<?php echo $_GET['ID'];?></label><br>

			<label>Click here to confirm</label> <input type="checkbox" name="confirm"><br>

			<input type="submit" name="submit">

			</form>

		<?php
		}

		?>
    </body>
</html>