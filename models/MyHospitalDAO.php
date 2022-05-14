<?php
require_once "./models/BaseModelDAO.php";

final class MyHospital extends BaseDao{
    
    function __construct()
    {
        parent::setOrderBy("nombre,apellidos ASC");
        parent::setTable("paciente");
        parent::setPrimaryKey("idpaciente");
    }

   
}