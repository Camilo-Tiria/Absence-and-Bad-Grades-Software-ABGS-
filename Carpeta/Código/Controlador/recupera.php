<?php

require "../Modelo/conexionBasesDatos.php";


$errors = array();


$objConexion=Conectarse();

if(!empty($_POST))
{
	$Correo_SENA = $objConexion->real_escape_string($_POST['Correo_SENA']);

	if(isCorreo_SENA($Correo_SENA))
	{
		$errors[] = "Debe ingresar un correo valido";
	}

		if(Correo_SENAExiste($Correo_SENA))
		{
			$user_id= getValor( '$Correo_SENA');

			$Token = generaTokenPass($Correo_SENA);

			$url = 'http://localhost:8082/Leidy_Calderon_Guia_2/ABGS/Controlador/cambia_pass.php?user_id='.$user_id.'&Token='.$Token;

			$asunto = 'Recuperar Password - ABGS';
			$cuerpo = "Hola $Correo_SENA: <br / ><br /> Se ha solicitado un reinicio de contrase&ntilde;a, Visita la siguiente direcci&oacute;n: <a href='$url'>$url</a>";

			if(enviarCorreo_SENA($Correo_SENA, $asunto, $cuerpo))
			{
				echo "Hemos enviado un correo electronico a la direccion $Correo_SENA para restablecer tu password.<br/>";
				echo "< href='Leidy_Calderon_Guia_2/ABGS'> Iniciar Sesion</a>";
				exit;	
			}else{
				$errors[] = "Error al enviar Email";
			}
		}else{
			$errors[] = "No existe";
		}
}

?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Recuperar Password</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	
	<body>
		
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Recuperar Password</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="index.php">Iniciar Sesi&oacute;n</a></div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="Correo_SENA" type="email" class="form-control" name="Correo_SENA" placeholder="email" required>                                        
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Enviar</a>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										No tiene una cuenta! <a href="registro.php">Registrate aquí</a>
									</div>
								</div>
							</div>    
						</form>
						<?php echo resultBlock ($errors);?>
					</div>                     
				</div>  
			</div>
		</div>
	</body>
</html>							
<!DOCTYPE html>
<html>
<head>
  <title>RecuperarContrasena</title>
    <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
  <meta charset="UTF-8">
</head><center><img src="../Imagenes/LogoFondo.png"></center>
<body>
<style>
    #nombre{
        margin-left: 440px; 
        margin-top: 30px;
}
    #Correo{
        margin-left: 440px; 
        margin-top: 10px;
    }
    #boton{
        margin-left: 600px; 
        margin-top: 10px;
    }
    #fondo{
        background-color: #E5DFDE ;
    }
</style>
<div id="fondo">
<center>
<h2 style="margin-top: 160px;">Recuperar mi Contraseña</h2></center>    

<form action="mailto:Misena@gmail.com,leidi@gmail.com " method="post" enctype="text/plain">
    <div id="nombre">
  Ingrese su Nombre completo:      
  <input  required="" style="margin-left: 11px" type="text" name="Nombre" size="30" >
    </div>
    <div id="Correo">
  Ingrese su dirección de Correo: 
  <input required="" type="text" name="Dirección" size="30" placeholder="Por ejemplo, Maria03@misena.edu.co" > 
  </div>
  <div id="boton">
  <input type="submit" value="Enviar">
  </div>
</form>
</div>
</body>
</html>