<html>
<head>
	<title>Add Data</title>
</head>
<body>

<?php

	include "db.php";
	$bd = new Database();
	$con = $bd->conectar();
	


	
	
	if(isset($_POST['Submit'])) {	
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$secretpin = $_POST['secretpin'];
		$created = $_POST['created'];
		

		if(empty($fullname) || empty($username) || empty($password) || empty($secretpin) || empty($created)) {
					
			if(empty($fullname)) {
				echo "<font color='red'>el campo esta vacio.</font><br/>";
			}
			
			if(empty($username)) {
				echo "<font color='red'>el campo esta vacio.</font><br/>";
			}
			
			if(empty($password)) {
				echo "<font color='red'>el Campo esta vacio.</font><br/>";
			}
			
			if(empty($secretpin)) {
				echo "<font color='red'>el Campo esta vacio.</font><br/>";
			}
			
			if(empty($created)) {
				echo "<font color='red'>el campo esta vacio.</font><br/>";
			}
			
			

			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else { 
			$sql = $con->prepare("INSERT INTO usuario (fullname, username, password, secretpin, created) VALUES(:fullname, :username, :password, :secretpin, :created)");
			
					
			$sql->bindparam(':fullname', $fullname);
			$sql->bindparam(':username', $username);
			$sql->bindparam(':password', $password);
			$sql->bindparam(':secretpin', $secretpin);
			$sql->bindparam(':created', $created);
			$sql->execute();
			
			
			

			echo "<font color='green'>Data added successfully.";
			echo "<br/><a href='usuarios.php'>View Result</a>";
		}
	}
?>
</body>
</html>
