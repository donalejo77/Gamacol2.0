<html>
<head>
	<title>Add Data</title>
</head>
<body>

<?php

	include "db.php";
	$bd = new Database();
	$con = $bd->conectar();
	


		$id = $_POST['id'];
		
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$secretpin = $_POST['secretpin'];
		$created = $_POST['created'];
		print($id);
		print($fullname);
		print($username);
		print($password);
		print($secretpin);
		print($created);
	
		
		
		
		

		if(empty($fullname) || empty($username) || empty($password) || empty($secretpin) || empty($created)) {
					
			if(empty($fullname)) {
				echo "<font color='red'>el campo esta vacio fullname.</font><br/>";
			}
			
			if(empty($username)) {
				echo "<font color='red'>el campo esta vacio username.</font><br/>";
			}
			
			if(empty($password)) {
				echo "<font color='red'>el Campo esta vacio password.</font><br/>";
			}
			
			if(empty($secretpin)) {
				echo "<font color='red'>el Campo esta vacio secretpin.</font><br/>";
			}
			
			if(empty($created)) {
				echo "<font color='red'>el campo esta vacio created.</font><br/>";
			}
			
			

			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else { 
			$sql = $con->prepare("UPDATE usuario SET fullname=:fullname, username=:username, password=:password, secretpin=:secretpin, created=:created  WHERE id=:id");
			
			$sql->bindparam(':id', $id);		
			$sql->bindparam(':fullname', $fullname);
			$sql->bindparam(':username', $username);
			$sql->bindparam(':password', $password);
			$sql->bindparam(':secretpin', $secretpin);
			$sql->bindparam(':created', $created);
			$sql->execute();

			header("Location: index.html");
		}
	
?>
</body>
</html>
