<?php

include_once("models/Employee.php");
include_once("models/EmpleadoRol.php");
include_once("config/conexion.php");



class EmployeesController{

    public function show(){

        $employees = Employee::showData();
        include_once("views/employees/show.php");
    }

    public function create(){

        if($_POST)
        {
            $nombre   = $_POST['FullName'];
            $email   = $_POST['Email'];
            $sexo   = $_POST['Gender'];
            $area   = $_POST['Area'];
            $boletin   = $_POST['Bulletin'];
            $descripcion   = $_POST['Description'];


            Employee::create($nombre,$email,$sexo,$area,$boletin,$descripcion);
            header("Location:./?controller=employees&action=show");


        }


        require 'models/Area.php';
        require 'models/Rol.php';
        $areas = new Area();
        $listAreas = $areas->showallareas();

        $roles = new Rol();
        $listRoles = $roles->showallRoles();
        include_once("views/employees/create.php");
    }

    public function edit(){

        $id = $_GET['id'];

        require 'models/Area.php';
        $areas = new Area();
        $listAreas = $areas->showallareas();

        require 'models/Rol.php';
        $roles = new Rol();
        $listRoles = $roles->showallRoles();

        

        if($_POST)
        {
            $id = $_POST['id'];
            $nombre   = $_POST['FullName'];
            $email   = $_POST['Email'];
            $sexo   = $_POST['Gender'];
            $boletin   = $_POST['Bulletin'];
            $descripcion   = $_POST['Description'];
            Employee::edit($id,$nombre,$email,$sexo,$boletin,$descripcion);
            header("Location:./?controller=employees&action=show");
        }

        $id = $_GET['id'];

        $employee = Employee::search($id);

        include_once("views/employees/edit.php");
    }

    public function delete()
    {
        $id = $_GET['id'];
        Employee::delete($id);
        header("Location:./?controller=employees&action=show");
    }
}

?>