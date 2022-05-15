	<?php
		require_once "./models/MyHospitalDAO.php";
		require_once "./utils/utils.php";
		global $errores;
		global $idpaciente;
		$errores=array();
		$mensaje="";
	
		if(isset($_POST['consulta'])){
			$paciente=new MyHospital();
			$paciente=$paciente->FindById($_POST['idpaciente']);
			$idpaciente=$_POST['idpaciente'];
			cargaDatos($paciente);
		}
		if(isset($_POST['modificacion'])){
			$idpaciente=$_POST['idpaciente'];
			if($idpaciente!==""){
				if(validarDatos($_POST))  {
					$paciente=new MyHospital();
					$paciente->setExclude('modificacion');
					$paciente->Update($_POST);
					$mensaje="Modificación efectuada";
				}
			} else {
				$mensaje="Debe seleccionar un paciente primero";
			}
		//	cargaDatos($paciente);
		}
		if(isset($_POST['baja'])){
			$paciente=new MyHospital();
			$paciente->Destroy($_POST['idpaciente']);
			$paciente=null;
			
			cargaDatos($_POST);
			$idpaciente=null;
			$mensaje="Baja efectuada";
		//	cargaDatos($paciente);
		}
	?>
	<h2>Mantenimiento paciente</h2>
	<form id='formulario' method='post' action='#'>
		<?=$idpaciente?>;
		<input type="hidden" id='idpaciente' name='idpaciente' value=<?=$idpaciente?>>
		<label>NIF:</label>
		<input type="text" id="nif" name="nif" value='<?=$nif?>'>
		<br><br>
		<label>Nombre:</label>
		<input type="text" id="nombre" name="nombre" value='<?=$nombre?>'>
		<br><br>
		<label>Apellidos:</label>
		<input type="text" id="apellidos" name="apellidos" value='<?=$apellidos?>'>
		<br><br>
		<label>Fecha Ingreso:</label>
		<input type="date" id="fechaingreso" name="fechaingreso" value='<?=$fechaingreso?>'>
		<br><br>
		<label>Fecha Alta Médica:</label>
		<input type="date" id="fechaalta" name="fechaalta">
		<br><br>
		<input type="submit" id="modificacion" name="modificacion" value='Modificar paciente' >
		<input type="submit" id="baja" name="baja" value='Baja paciente' >
		<br><br>
		<h4><?=$mensaje?></h4>
		<?php showErrors($errores); ?>
	</form>