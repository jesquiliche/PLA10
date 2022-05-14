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
		</tr>
		<?php 
			foreach($pacientes as $paciente){
				echo "<tr>";
				echo "<td>$paciente[nif]</td>";
				echo "<td>$paciente[nombre]</td>";
				
				echo "<td>$paciente[apellidos]</td>";
				echo "<td>";
				echo "<form action='index?mantenimiento' method='post'>";
				echo "<input type='hidden' name='idpaciente' value='$paciente[idpaciente]'>";
				echo "<input type='submit' name='consulta' value='Detalle paciente'>";
				echo "</form>";
				echo "</td>";
				echo "</tr>";
			 }

		?>
			
	</table><br><br>
	<h4></h4>