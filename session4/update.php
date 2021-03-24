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

                $sql="SELECT * FROM user WHERE ID =" .$_GET['ID'];//查询固定ID//
   
		        $result = mysqli_query($connection, $sql);


                }
         if(mysqli_num_rows($result)> 0){

     while ($row = mysqli_fetch_assoc($result)) {
     	 ?>


     	 <form action="update.php?ID=<?php echo $_GET['ID'];?>" method="post" >
     	 	
        <label>name</label>
        <input type="text" name="name" value="<?php echo $row['name'];?>"><br>
        <label>password</label>
        <input type="text" name="password" value="<?php echo $row['password'];?>"><br>
        
        <input type="submit" name="submit">

     	 </form>

<?php
     }
 }

IF ($_SERVER["REQUEST_METHOD"]=="POST"){

     $sqlupdate = " UPDATE user SET 
     name='".$_POST['name']."',
     password='".$_POST['password']."'
     
     WHERE ID = ".$_GET['ID'];

     if ($connection->query($sqlupdate)===TRUE){
        echo "New record update successfully. <a href='exercise3.php'>Click Here </a> to navigate back to the main menu.";
     }
     else{
        echo "Unfortunatly we couldn't update the record!";
     }
}
 
?>
    </body>
</html>