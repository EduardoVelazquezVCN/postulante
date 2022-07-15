
<?php
    include_once 'conexionLog.php';
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                //ventana de tabla administrador 
                header('location: tabla.php');
            break;

            case 2:
                 //ventana de formulario colaborador 
                header('location: Formulario.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[3];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: tabla.php');
                break;

                case 2:
                header('location: Formulario.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            //echo "Nombre de usuario o contraseña incorrecto";
            echo "<script languaje='JavaScript'>
                alert('Error, revisa tus datos');
                location.assign('index.php');
                </script>";
        }
        

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilosLogin.css">
    <title>LOGIN KERKLY</title>
    <link rel="icon" href="img/icon-pestana}.png">
   
</head>
<body>

    <div class="container">
            <div class="row justify-content-center pt-1 mt-4 m-1">
                <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                    <form action="#" method="POST" id="signin-form">
                        <div class="form-group text-center pt-1">
                            <h1 class="text-Light2">ESTANCIA 2022</h1>
                        </div>
                        <div class="icono">
                            <img src="img/login.png" width="145" height="130">
                        </div>
                        <div class="form-group text-center pt-1">
                            <h1 class="text-Light">INICIAR SESIÓN</h1>
                        </div>
                        <div class="form-group mx-sm-4 pt-1">
                            <input type="text" class="form-control" name="username" id="singin-email" placeholder="Usuario"
                                required>
                        </div>
                        <div class="form-group mx-sm-4 pb-1">
                            <input type="password" class="form-control" name="password" id="signin-contraseña" placeholder="Contraseña" required>
                        </div>

                        <!--FIN mostrar contraseña-->
                        <script>
                            function mostrarContrasena(){
                                var tipo = document.getElementById('signin-contraseña');
                                    if(tipo.type == "password"){
                                        tipo.type = "text";
                                    }else{
                                        tipo.type = "password";
                                }
                            }
                        </script>
                        <button class="form-group mx-sm-4 pb-1" id="botonMostrarContraseña" type="button" onclick="mostrarContrasena()">Mostrar Contraseña</button>
                        <!--INICIO mostrar contraseña-->
                        <div class="form-group mx-sm-4 pb-1">
                            <input class="btn btn-block ingresar2" id="ingresar" name="enviar" value="INGRESAR" type="submit">
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>

</body>
</html>