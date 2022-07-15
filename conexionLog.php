<?php
   /*$servidor= "localhost";
   $NombreDB = "loginRol";
   $UsaurioDB = "root";
   $ContrasenaDB = "kerkly1234";
    $con = mysqli_connect($servidor, $UsaurioDB, $ContrasenaDB,$NombreDB);
    if($con->connect_error){
        die("fallo la conexion" .$con->connect_error);
    }else{
        echo 'Conexion Exitosa';
    }*/

    class Database{

        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;
    
        public function __construct(){
            $this->host = 'localhost';
            $this->db = 'kerklyapp3';
            $this->user = 'root';
            $this->password = 'kerkly1234';
            $this->charset = 'utf8mb4';
        }
    
        function connect(){
            try{
                $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                
                $pdo = new PDO($connection, $this->user, $this->password, $options);
        
                return $pdo;
            }catch(PDOException $e){
                print_r('Error connection: ' . $e->getMessage());
            }
        }
    
    }

?>