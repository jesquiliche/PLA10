<?php
function modificacion(){
    global $mensaje;
    $nif2=null;
    $idpaciente=$_POST['idpaciente'];
    try{
        if($idpaciente!=="" && $idpaciente!==null){
            if(validarDatos($_POST))  {
                $paciente=new MyHospital();
                $modificaciones=$paciente->IsModifiedRecord($_POST['idpaciente'],$_POST,$nif2);
                //Si nif2 llega informado es que se ha cambiado el nif
                if($nif2==null) {
                    if($paciente->FindByNif($nif2)>0)
                        $mensaje="Nif ya existe en la base de datos";
                        return 0;
                }
            
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
        }catch(Exception $e){
            if($e->getCode()==23000) 
                $mensaje="Paciente ya existe en la BB.DD";
        }


    }


