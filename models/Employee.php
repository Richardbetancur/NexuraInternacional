<?php

class Employee{

    public $id;
    public $nombre;
    public $email; 
    public $sexo;
    public $area;
    public $boletin;
    public $descripcion;

    public function __construct($id,$nombre,$email,$sexo,$area,$boletin,$descripcion){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->area = $area;
        $this->boletin = $boletin;
        $this->descripcion = $descripcion;
    }

    public static function showData(){
        $listEmployee = [];
        $cnn = BD::conection();
        $sql = $cnn->query("SELECT e.id, e.nombre,e.email,e.sexo,a.nombre as area,e.boletin,e.descripcion FROM empleado e
        INNER JOIN areas a
        on e.area_id = a.id;");

        foreach($sql->fetchAll() as $employee){
            $listEmployee[] = new Employee($employee['id'],$employee['nombre'],$employee['email'],$employee['sexo'],$employee['area'],$employee['boletin'],$employee['descripcion']);
        }

        return $listEmployee;
    }

    public static function create($nombre,$email,$sexo,$area,$boletin,$descripcion){


        $cnn = BD::conection();
        $sql = $cnn->prepare("INSERT INTO empleado(nombre, email, sexo, area_id, boletin, descripcion)VALUES(?,?,?,?,?,?)");
        $sql->execute(array($nombre,$email,$sexo,$area,$boletin,$descripcion));


    }

    public static function delete($id){
        $cnn = BD::conection();
        $sql = $cnn->prepare(" DELETE FROM empleado WHERE id=? ");
        $sql->execute(array($id));
    }


    public static function search($id){
        $cnn = BD::conection();
        $sql = $cnn->prepare(" SELECT e.id, e.nombre,e.email,e.sexo,a.nombre as area,e.boletin,e.descripcion FROM empleado e
        INNER JOIN areas a
        on e.area_id = a.id
        and e.id = ?");
        $sql->execute(array($id));

        $employee = $sql->fetch();
        return new Employee($employee['id'],$employee['nombre'],$employee['email'],$employee['sexo'],$employee['area'],$employee['boletin'],$employee['descripcion']); 
    }



    public function edit($id,$nombre,$email,$sexo,$boletin,$descripcion){
        $cnn = BD::conection();
        $sql = $cnn->prepare("UPDATE empleado SET nombre=?, email=?, sexo=?, boletin=?, descripcion=? where id = ?");
        $sql->execute(array($nombre,$email,$sexo,$boletin,$descripcion,$id));
    }
    

}



?>