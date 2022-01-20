<?php

class EmpleadoRol
{
    public $empleadoid;
    public $rolid;

    public function __construct($empleadoid,$rolid){
        $this->id = $empleadoid;
        $this->rolid = $rolid;
    }

    public function searchById()
    {
        
    }

    public function saveRol($id, $rol_id){
        $cnn = BD::conection();
        $sql = $cnn->prepare("INSERT INTO empleado_rol(empleado_id, rol_id)VALUES(?,?)");
        $sql->execute(array($id,$rol_id));
    }
}