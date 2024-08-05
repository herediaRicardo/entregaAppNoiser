<?php
$titulo = $_POST['titulo'];
$description = $_POST['description'];
$media = $_POST['media'];


if($titulo === '' || $description === '' || $media === ''){
        include ("index-staff.php");
        ?>
        <div classs="container p-5 m-auto">
	    <div class="row no-gutters">
		<div class="col-lg-6 col-md-12 m-auto">
			<div class="alert alert-danger fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="True">&times;</span>
			  	</button>
			 	<h4 class="alert-heading">¡Warning!</h4>
			  	<p>Tenés que rellenar todos los campos.</p>
			</div>
		</div>
	</div>
</div>
    <?php
}

$conexion = mysqli_connect("localhost", "root", "", "parcial-pt3");

$publicacion = mysqli_real_escape_string($conexion, $titulo);
if($titulo && $description && $media){
$res = mysqli_query($conexion, 'INSERT INTO publicacion(TITULO, DESCRIPCION, MEDIA) VALUES("'.$titulo.'", "'.$description.'", "'.$media.'")');   
if($res){
    header('location: proyecto-1.php');
   }
}



mysqli_close($conexion);

?>