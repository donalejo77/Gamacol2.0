<?php
    include "db.php";
    $bd = new Database();
    $con = $bd->conectar();
    $sql = $con->prepare("SELECT * FROM usuario");
    $sql->execute();
    $response = $sql->fetchALL(PDO::FETCH_ASSOC);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add.html">registrarse</a>
    <br>
    <div id="login">
        <form action="index.html" >
            <h2>Iniciar Sesión</h2>
            <input type="text" placeholder="Usuario" name="usuario" method="POST">
            <input type="password" placeholder="Contraseña" name="pas" method="POST">
            <input type="hidden" value="entrar" name="entrar">
            <button>Entrar</button>
        </form>
    </div>
    <br>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>fullname</th>
            <th>username</th>
            <th>password</th>
            <th>secretpin</th>
            <th>created</th>
        </thead>
        <tbody>
            <?php
                

                foreach($response as $row){
                    $id = $row['id'];
                    $fullname = $row['fullname'];
                    $username = $row['username'];
                    $password = $row['password'];
                    $secretpin = $row['secretpin'];
                    $created = $row['created'];
                

            ?>
            <tr>
                <th scope="row"><?php echo $id ?></th>
                <th scope="row"><?php echo $fullname ?></th>
                <th scope="row"><?php echo $username ?></th>
                <th scope="row"><?php echo $password ?></th>
                <th scope="row"><?php echo $secretpin ?></th>
                <th scope="row"><?php echo $created ?></th>
                <td><a href="delete.php? id= <?php echo $id ?> ">Delete</a></td>
                <td><a href="update.php? id= <?php echo $id ?> & fullname= <?php echo $fullname ?> & username= <?php echo $username ?> & password= <?php echo $password ?>& secretpin= <?php echo $secretpin ?>& created= <?php echo $created ?> ">Update</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>