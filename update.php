<?php
    
    
    
    //getting id of the data from url
    $id = $_GET['id'];
	$fullname = $_GET['fullname'];
	$username = $_GET['username'];
	$password = $_GET['password'];
	$secretpin = $_GET['secretpin'];
	$created = $_GET['created'];
    

    
    
?>


<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form action="update2.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>id</td>
				<td><input type="number" name="id" placeholder="<?php echo $id ?>" value="<?php echo $id ?>"></td>
			</tr>
			<tr> 
				<td>fullname</td>
				<td><input type="text" name="fullname" value="<?php echo $fullname ?>"></td>
			</tr>
			<tr> 
				<td>username</td>
				<td><input type="text" name="username" value="<?php echo $username ?>" ></td>
			</tr>
			<tr> 
				<td>password</td>
				<td><input type="text" name="password" value="<?php echo $password ?>"></td>
			</tr>
			<tr> 
				<td>secretpin</td>
				<td><input type="number" name="secretpin" value="<?php echo $secretpin ?>"></td>
			</tr>
			<tr> 
				<td>Created</td>
				<td><input type="date" name="created" placeholder="<?php echo $created ?>"></td>
			</tr>
			
			<tr> 
				
				<td><input type="submit" name="Update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>