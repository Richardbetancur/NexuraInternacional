<?php

// se haria otra validación mejor

$controller="page";
$action="home";

if( isset($_GET['controller']) && isset($_GET['action']) ){
  
    if ( ($_GET['controller']!="") && ($_GET['action']!="") ){
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }

}

require_once 'views/template.php';

?>