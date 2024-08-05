<?php
session_start()
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="styles-comments.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="estilos.css" rel="stylesheet" />
        <title>Proyecto 1</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: black;">
            <div class="container">
                <a class="navbar-brand" href="index-staff.php">NOISER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                 aria-expanded="false" aria-label="Toggle navigation">Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
            </div>
        </nav>
        


<!-- Modal para agregar nueva publicación -->

<main>

    <div class="agregarPubli">
    <h1>Agregar Nueva Publicación</h1>
    <form id="publicationForm" action="post.php" method="post">
                  <label for="title">Título:</label>
                  <input type="text" id="titulo" name="titulo" required></input><label for="description">Descripción:</label>
                  <input id="description" name="description" required></input> <label for="media">URL de Medios:</label>
                  <input type="text" name="media" id="media">
                  <div class="botonesPublis">
                  <button type="submit" data-inline="true" name="submit" >Agregar Publicación</button>
                  <button type="button" id="cancelButton" data-inline="true">Cancelar</button>
                  </div>
              </form>
     </div>


  <div class="container">
                <div class="row mb-4 align-items-center">
                  <div class="col-md-6" data-aos="fade-up">
                  <?php
                    $conexion = mysqli_connect("localhost", "root", "", "parcial-pt3");
                    $res3 = mysqli_query($conexion, 'SELECT p.ID, p.TITULO, p.DESCRIPCION, p.MEDIA
                    FROM publicacion P');
                    $publicaciones = mysqli_fetch_all($res3);

                    foreach($publicaciones as $publicaciones2){
                      if($publicaciones2[0] + 0){
                      echo '<div class="contenedorPublicaciones"><br><h2 class="tituloPubliSubida">'.$publicaciones2[1].'</h2>
                      <p class="spanDeDescripcion">'.$publicaciones2[2].'</p>
                      <img src="'.$publicaciones2[3].'" alt="Publicación multimedia" class="publicacion-media"></div>';
                      }}
                  ?>
                  </div>
                </div>
              </div>
          
        </main>


        <?php
        if(isset($_SESSION['username'])):
        ?>

        <form method="POST" action="send-comment.php" style="color: white;">
            <section id="contact">
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-8">
                                <div class="col-xs-12">
                                    <h3>¡Haz un Comentario!</h3>
                                    <?php
                                    echo '<h6>Estas comentando como '. $_SESSION['username'].' </h6>'
                                    ?>
                                <div class="form-group">
                                    <br>
                                </div>
                                    <div class="form-group">
                                    <textarea class="form-control" name="comentario" cols="30" rows="2" type="text" id="comentario" 
                                    placeholder="Escribe tu comentario..."></textarea>
                                    </div>
                            <br>
                            <input class="btn btn-primary" type="submit" name="proyecto1" id="proyecto1" value="Enviar Comentario" action="#">
                            <br>
                            <br>
                            <?php      
                                                      
                                $conexion = mysqli_connect("localhost", "root", "", "parcial-pt3");
                                // $res = mysqli_query($conexion, 'SELECT * FROM comentarios');
                          
                                $res = mysqli_query($conexion, 
                                'SELECT c.TEXTO, c.FECHA, username.FULLNAME, p.ID
                                FROM comentarios C
                                LEFT JOIN producciones P ON c.FK_PRODUCCION = P.ID
                                LEFT JOIN username ON c.FK_USUARIO = username.ID');
                                $res2 = mysqli_query($conexion, 'SELECT p.ID, p.TITTLE, p.DESCRIPTION, c.TITTLE, u.FULLNAME
                                FROM producciones P
                                LEFT JOIN autores_de_producciones ADP on p.ID = ADP.FK_PRODUCCIONES
                                LEFT JOIN username U on ADP.FK_USUARIOS = u.ID
                                LEFT JOIN categorias C on c.ID = p.FK_CATEGORIA');


                                # $res3 = mysqli_query($conexion, 
                                # 'SELECT c.TEXTO, c.FECHA, username.FULLNAME, p.ID
                                #FROM comentarios C
                                # LEFT JOIN producciones P ON c.FK_PRODUCCION = P.ID
                                # LEFT JOIN username ON c.FK_USUARIO = username.ID');

                                // $producciones2 = [];                           
                                //   while($row = mysqli_fetch_assoc($res2)){
                                //  $producciones2[] = $row;
                                //  }                            
                                // // $producciones = mysqli_fetch_assoc($res2);  
                                $comentarios = mysqli_fetch_all($res);
                                $producciones = mysqli_fetch_all($res2);
                                // // var_dump($producciones);
                                
                                // echo $producciones2;
                                # $comentariosPublicacion = mysqli_fetch_assoc($res3);      
                                // $rows2 = mysqli_fetch_row($resultado);  
                                $usernameid = $_SESSION['username_id'];                                                             
                                foreach($comentarios as $comentario){
                                  if($comentario[3] == 1){
                                        echo '<div class="card text-dark">
                                                <div class="card-body p-4">
                                                  <div class="d-flex flex-start">                                                  
                                                    <div>
                                                      <h6 class="fw-bold mb-1">'.$comentario[2].'</h6>
                                                      <div class="d-flex align-items-center mb-3">
                                                        <p class="mb-0">
                                                          '.$comentario[1].'                                                  
                                                        </p>                                             
                                                      </div>
                                                      <p class="mb-0">
                                                        '.$comentario[0].'
                                                      </p>
                                                    </div>
                                                  </div>
                                                </div>';
                                    	  // echo "<p>$comentario[2] - $comentario[1]: <br> $comentario[0]</p>";
                                      }
                                }                           
                                # select c.TEXTO, c.FECHA, username.FULLNAME
                                # from comentarios C
                                # left join username on c.FK_USUARIO = username.iD       
                              ?> 
                        </div>
                    </div>
                </div>
            </secion>
        </form>  
          <?php
    else: 
      echo '<p class="text-center">Tenés que estar logueado para comentar. <a href="index.php">Iniciar Sesión</a></p>';

      endif;
    ?>   
    <!-- Sección de Footer -->
    <footer class="footer py-4" style="margin-top: 70px; margin-bottom: 0px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Noiser 2024</div>
                    <div class="col-lg-4 fs-9">matias.frare@davinci.edu.ar ricardo.heredia@davinci.edu.ar franco.gentile@davinci.edu.ar renzo.paolino@davinci.edu.ar</div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    
</html>  