<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Agregar un paciente nuevo</title>
	<link rel="stylesheet" href="../css/registro.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900&display=swap" rel="stylesheet">
</head>
<body>
	<img src="../img/historia clinica.png" width="1300" height="300" class="encabezado" alt="historia clinica">
	<form action="">
		<div class="formulario">
			<h1 class="titulo">DATOS PERSONALES DEL PACIENTE</h1>
			<br>
			<div class="grupo">
				<label>N° de Expediente</label>
				<input type="text" name=""><span class="barra"></span>
			</div>
			<br>
			<br>
			<h2 class="subtitulo">DATOS GENERALES</h2>
			<br>
			<div class="grupo">
				<label>Nombre del paciente</label>
				<input type="text" name=""><span class="barra"></span>
			</div><br>
            <div class="grupo radio">
            <label>Sexo </label>
            <br>
            <label class="sex" for="masculino">Masculino</label>
            <input type="radio" name="sexo" id="masculino" value="Masculino">
            <label class="sex" for="femenino">Femenino</label>
		    <input type="radio" name="sexo" id="femenino" value="Femenino">
			</div><br>
			<div class="grupo">
				<label>Dirección</label>
				<input type="text" name=""><span class="barra"></span>
			</div>
			<div class="grupo">
				<label>Teléfono</label>
				<input type="text" name=""><span class="barra"></span>
			</div>
			<div class="grupo date">
                <label for="date">Fecha de nacimiento</label>
				<input type="date" required>
			</div>
			<br>
			<div class="grupo select">
           <label>Estado civil</label>
			    <select name="estado_civil" required>
			        <option value="1">Seleccione una opción</option>
			        <option value="2">Soltero(a)</option>
			        <option value="3">En una relación</option>
			        <option value="4">Comprometido(a)</option>
			        <option value="5">Casado(a)</option>
			        <option value="6">Divorciado(a)</option>
			        <option value="7">Viudo(a)</option>
		            <option value="8">Unión libre</option>			
			    </select>
			</div>
			<br>
			<div class="grupo">
				<label>Ocupación</label>
				<input type="text" name=""><span class="barra"></span>
			</div>	

			<div class="grupo">
				<label>Derechohabiencia</label>
				<input type="text" name=""><span class="barra"></span>
			</div>			

			<div class="grupo">
				<label>Edad</label>
				<input type="text" name=""><span class="barra"></span>
			</div>	

			<div class="grupo">
				<label>Nombre de la persona que responde al interrogatorio indirecto y parentesco</label>
				<input type="text" name=""><span class="barra"></span>
			</div>
			<br>
			<input type="submit" class="submit" value="Guardar">			
		</div>
		
	</form>
	
</body>
</html>