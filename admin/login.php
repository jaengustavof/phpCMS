<?php
///echo password_hash("pass1234", PASSWORD_DEFAULT);
/////LOGIN/////
if ($_POST) {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $correo = $_POST['email'];
                $clave = $_POST['password'];
                require '../includes/conexion.php';
                #realizamos una consulta para comprobar si el email existe y la cuenta est'a activa
                $sqlLogin = "SELECT * FROM user WHERE user_email LIKE '".$correo."'";
                $queryLogin = mysqli_query($conectar, $sqlLogin);
                if (mysqli_num_rows($queryLogin) == 0) {

                    echo "Usuario y o Contraseña INCORRECTO";

                }else{

                    while($rowLogin = mysqli_fetch_assoc($queryLogin)){
                        #verificamos que la clave ingresada y la clave registrada sean iguales
                        if(password_verify($clave, $rowLogin['user_password'])){
                            echo "Bienvenido!";
                            #Si el usuario esta validado, verificamos que el rol del usuario sea administrador.
                           /* if($rowLogin['user_role'] == 1){*/
                                #iniciamos la sesion
                            session_start();

                            #guardamos los datos del usuario que variables de sesion
                            $_SESSION['idUser'] = $rowLogin['user_id'];
                            $_SESSION['nameUser'] = $rowLogin['user_name'];
                            $_SESSION['lastUser'] = $rowLogin['user_lastname'];
                            $_SESSION['emailUser'] = $rowLogin['user_email'];
                            $_SESSION['roleUser'] = $rowLogin['user_role'];

                            #enviamos a main.php si las credenciales son correctas
                            header('Location: index.php');

                          /*  }else{
                                echo "No tienes los permisos suficientes para entrar aquí.";
                            } */                       
                        }else{

                            echo "Usuairo y/o contraseña incorrecto Errorr dsadsaddsadsa";
                            
                        }
                    }
                }
            }else{
            echo "Debes rellenar todos los campos";
            }

        }else{
        echo "Tienes que introducir los datos.";
        }

}
////Fin if Login////

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                    </div>
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Password">
                                        </div>
 
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>