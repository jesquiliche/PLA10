	<?php
		
	?>
	<h2>Mantenimiento paciente</h2>
	<form id='formulario' method='post' action='#'>
		<input type="hidden" id='idpaciente' name='idpaciente'>
		<label>NIF:</label>
		<input type="text" id="nif" name="nif">
		<br><br>
		<label>Nombre:</label>
		<input type="text" id="nombre" name="nombre">
		<br><br>
		<label>Apellidos:</label>
		<input type="text" id="apellidos" name="apellidos">
		<br><br>
		<label>Fecha Ingreso:</label>
		<input type="date" id="fechaingreso" name="fechaingreso">
		<br><br>
		<label>Fecha Alta Médica:</label>
		<input type="date" id="fechaalta" name="fechaalta">
		<br><br>
		<input type="submit" id="modificacion" name="modificacion" value='Modificar paciente' >
		<input type="submit" id="baja" name="baja" value='Baja paciente' >
		<br><br>
		<h4></h4>
	</form>