<?php
$usernameRegister = $_POST['username-register'];
$passwordRegister = $_POST['password-register'];
$fullnameRegister = $_POST['fullname-register'];
$emailRegister = $_POST['email-register'];
$rolRegister = $_POST['rol-register'];

if($rolRegister == 'Cliente'){
    $rolRegister = 1;  
}if($rolRegister == 'Staff'){
    $rolRegister = 2;
}

if($usernameRegister === '' || $passwordRegister === '' || $fullnameRegister === '' || $emailRegister === '' || $rolRegister === ''){
        include ("index-register.php");
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

$register = mysqli_real_escape_string($conexion, $usernameRegister);
if($usernameRegister && $passwordRegister && $fullnameRegister && $emailRegister && $rolRegister){
$res = mysqli_query($conexion, 'INSERT INTO username(FULLNAME, USERNAME, EMAIL, PW, FK_ROL) VALUES("'.$fullnameRegister.'", "'.$usernameRegister.'", "'.$emailRegister.'", "'.$passwordRegister.'", "'.$rolRegister.'")');
    if($res){
    header('location: index.php');
   }
}



mysqli_close($conexion);

?>