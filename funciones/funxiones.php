<?php
function modificacion(){
    global $mensaje;
    $idpaciente=$_POST['idpaciente'];
			if($idpaciente!==""){
				
				
                
					if(validarDatos($_POST))  {
						$paciente=new MyHospital();
                        print_r($_POST);
						$modificaciones=$paciente->IsModifiedRecord($_POST['idpaciente'],$_POST,$nif2);
						if(!$modificaciones){
							$mensaje="El paciente no existe o no se han modificado datos";
						} else {
							$paciente->setExclude('modificacion');
							$paciente->Update($_POST);
							$mensaje="Modificación efectuada";
						}
					}
				} else {
					$mensaje="Debe seleccionar un paciente primero";
				}
		//	cargaDatos($paciente);
			}


