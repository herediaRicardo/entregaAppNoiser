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
            <form class="login-form validate-form" id="formLogin" action="validar.php" method="post">
                <span class="login-form-title">Ingreso</span">
                
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                <input class="input100" type="text" id="username" name="username" placeholder="Ingrese su nombre de usuario">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Ingrese su contraseña">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn btn-warning">Ingresar</button>
                    </div>
                </div>
            </form>
            <a style="font-size: 20px; text-decoration: none; color: white;" href="index-register.php">¿No tenés cuenta?</a>
        </div>
    </div>     

    

    
        


    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>