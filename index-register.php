<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles-login.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="datatables/css/dataTables.bootstrap4.min.css">
    <link href="estilos.css" rel="stylesheet" />
    <title>Agencia Multimedial NOISER</title>

</head>
<body>

<div class="container-login" style="min-height: 80vh;">
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action="register.php" method="post">
                <span class="login-form-title">Registro</span">
                <br>
                <br>

                <div class="wrap-input100" data-validate="Rol incorrecto">
                    <select class="input100 mb-3" id="rol-register" name="rol-register">  
                    <option value="Cliente">Cliente</option>
                    <option value="Staff">Staff</option>                          
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate = "Fullname incorrecto">
                <input class="input100" type="text" id="fullname-register" name="fullname-register" placeholder="Ingrese su nombre completo">
                    <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                <input class="input100" type="text" id="username-register" name="username-register" placeholder="Ingrese un nombre de usuario">
                    <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100" data-validate = "Email incorrecto">
                <input class="input100" type="text" id="email-register" name="email-register" placeholder="Ingrese un nombre de email">
                    <span class="focus-efecto"></span>
                </div>


                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password-register" name="password-register" placeholder="Ingrese una contraseña">                 
                    <span class="focus-efecto"></span>
                </div>
                     
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn btn-warning">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>     

    
        


    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>