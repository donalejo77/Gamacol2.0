<?php
    
    include "db.php";
    $bd = new Database();
    $con = $bd->conectar();
    
    //getting id of the data from url
    $id = $_GET['id'];
    print($id);

    //deleting the row from table
    $sql = "DELETE FROM usuario WHERE id=:id";
    $sql = $con->prepare("DELETE FROM usuario WHERE id=:id");
    $sql->execute(array(':id' => $id));

    //redirecting to the display page (index.php in our case)
    header("Location:index.html");

    
?>
