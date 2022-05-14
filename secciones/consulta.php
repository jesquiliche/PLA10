	<?php
		require_once "./models/MyHospitalDAO.php";
		$hospital= new MyHospital();
		$pacientes =$hospital->FindAll();

	?>
	<h2>Consulta de pacientes</h2>
	<table id='pacientes'>
		<tr>
			<th>Nif</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Fecha Ingreso</th>
			<th>Fecha alta</th>
		</tr>
		<?php 
			foreach($pacientes as $paciente){
				echo "<tr>";
				echo "<td>$paciente[nif]</td>";
				echo "<td>$paciente[nombre]</td>";
				
				echo "<td>$paciente[apellidos]</td>";
				$fecha=DateTime::createFromFormat("Y-m-d",$paciente["fechaingreso"])->format("d/m/Y");
		
				echo "<td>$fecha</td>";
				if(!is_null($paciente["fechaalta"]))
					$fecha=DateTime::createFromFormat("Y-m-d",$paciente["fechaalta"])->format("d/m/Y");
				else $fecha="";
				echo "<td>$fecha</td>";
				echo "</tr>";
			 }

		?>
			
	</table><br><br>
	<h4></h4>