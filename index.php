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
<?php
    if(isset($_POST{'enviar'})){
        if(empty($_POST['usuario']) || empty($_POST['password']) ){
           echo "<script languaje='JavaScript'>
           alert('El usuario o el password estan vacios');
           location.assign('index.php');
           </script>";
        }else{
            include ('conexionDB.php');
            $usuario =$_POST['usuario'];
            $password =$_POST['password'];
            $sql="select * from registrokerklylogin where usuario='" .$usuario."' and password='".$password."'";  
            $resultado=mysqli_query($con, $sql);

            if($fila=mysqli_fetch_assoc($resultado)){
                echo "<script languaje='JavaScript'>
                alert('Bienvenido');
                location.assign('Formulario.html');
                </script>";
            }else{
                echo "<script languaje='JavaScript'>
                alert('Error, revisa tus datos');
                location.assign('index.php');
                </script>";
            }
        }
        
    }else{ 

  
?>

    <div class="container">
        <div class="row justify-content-center pt-1 mt-4 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="signin-form">
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
                        <input type="text" class="form-control" name="usuario" id="singin-email" placeholder="Usuario"
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

    
 

        <footer class="text-center text-lg-start" style="background-color: #2A5E6B;">
            <!-- Copyright -->
            <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="https://estancia2022.kerkly.com/">estancia2022.kerkly.com</a>
            </div>
             <!-- Copyright -->
        </footer>
   

<?php
  }
?>

   

    <!--Boostrap Scrips-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!--Diseño de ventana emergente de error-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    

    <!--Mis Scrips-->
    <script src="funciones.js"></script>

</body>

</html>