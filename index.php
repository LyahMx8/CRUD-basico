<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<div class="cuerpo">
	<form action="" method="POST" enctype="">
		<label>Código
			<input type="text" name="codigo" id="codigo" placeholder=""></label>
		<label>Nombre
			<input type="text" name="nombre" id="nombre" placeholder=""></label>
		<label>Apellido
			<input type="text" name="apellido" id="apellido" placeholder=""></label>
		<label>Celular
			<input type="text" name="celular" id="celular" placeholder=""></label>
		<label>Dirección
			<input type="text" name="direccion" id="direccion" placeholder=""></label>

		<input type="submit" name="insrtRgis" value="Registrar">
		<input type="submit" name="cnslTdos" value="Consultar">
		<input type="submit" name="actzaRgis" value="Actualizar">
		<input type="submit" name="elmnaRgis" value="Eliminar">
	</form><br><br>
<?php
	include_once('lLogica/clsEmp.php');

	if(isset($_POST['insrtRgis'])){ //Si se envía el formulario con la opción insertar registro
		$codEmp = $_POST['codigo']; //Guarda codigo del empleado en una nueva variable
		$nomEmp = $_POST['nombre']; //Guarda nombre del empleado en una nueva variable
		$apEmp = $_POST['apellido']; //Guarda apellido del empleado en una nueva variable
		$celEmp = $_POST['celular']; //Guarda celular del empleado en una nueva variable
		$dirEmp = $_POST['direccion']; //Guarda direccion del empleado en una nueva variable
		$objEmp=new ClsEmp($codEmp,$nomEmp,$apEmp,$celEmp,$dirEmp);
		$objEmp->InsrtRgis(); //Llama al método para crear datos del empleado
	}

	if(isset($_POST['cnslTdos'])){
		$objEmp=new ClsEmp(1,1,1,1,1);
		$objEmp->MstrarTdo(); //Llama al método para consultar datos del empleado
	}

	if(isset($_POST['actzaRgis'])){ //Si se envía el formulario con la opción actualizar registro
		$codEmp = $_POST['codigo']; //Guarda codigo del empleado en una nueva variable
		$nomEmp = $_POST['nombre']; //Guarda nombre del empleado en una nueva variable
		$apEmp = $_POST['apellido']; //Guarda apellido del empleado en una nueva variable
		$celEmp = $_POST['celular']; //Guarda celular del empleado en una nueva variable
		$dirEmp = $_POST['direccion']; //Guarda direccion del empleado en una nueva variable
		$objEmp=new ClsEmp($codEmp,$nomEmp,$apEmp,$celEmp,$dirEmp); //Crea objeto empleado con los atributos de las variables
		$objEmp->ActzaRgis(); //Llama al método para actualizar empleado
	}

	if(isset($_POST['elmnaRgis'])){
		$codEmp = $_POST['codigo']; //Guarda codigo del empleado en una nueva variable
		$objEmp=new ClsEmp(1,1,1,1,1);
		$objEmp->ElmnRgis($codEmp); //Llama al método para eliminar al empleado
	}
?>
</div>
</body>
</html>