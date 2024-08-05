<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];


$conexion = mysqli_connect("localhost", "root", "", "parcial-pt3");

$query = "SELECT * FROM username WHERE username = '$username' AND pw = '$password'";
$res = mysqli_query($conexion, $query);

$rows = mysqli_fetch_row($res);
$username = mysqli_fetch_assoc($res);

if($rows == true){
    $rol = $rows[5];
    $username = $rows[1];
    $username_id = $rows[0];
    $_SESSION['username_id'] = $username_id;
    $_SESSION['username'] = $username;
    $_SESSION['rol'] = $rol;
    if($rol == 1){
        header("Location: index-cliente.php");
    }else if($rol == 2){
        header("Location: index-staff.php");
        
}
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <div classs="container p-5 m-auto">
	<div class="row no-gutters">
		<div class="col-lg-6 col-md-12 m-auto">
			<div class="alert alert-danger fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="True">&times;</span>
			  	</button>
			 	<h4 class="alert-heading">Error</h4>
			  	<p>Alguno de tus datos ingresados es incorrecto.</p>
			</div>
		</div>
	</div>
</div>
    <?php
}
mysqli_free_result($res);
mysqli_close($conexion);