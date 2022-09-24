<?php
    class Database
    {

        private $hostname = 'bg63uxah9japlulqupmb-mysql.services.clever-cloud.com';
        private $database = 'bg63uxah9japlulqupmb';
        private $username = 'u6zvugqlb96cufhl';
        private $password = 'MbeMrzOgSE5uaYVypkFU';
        private $charset = "utf8";

     function conectar()
     {
        try{
            $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $pdo = new PDO($conexion, $this->username,$this->password,$option);
            return $pdo;
        }catch(PDOException $e){
                 echo 'error de conexion' . $e;
                 exit;
        }
     }

    }

?>
