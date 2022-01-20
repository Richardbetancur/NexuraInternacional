<?php

class PageController{

    public function home()
    {
        include_once("views/pages/home.php");
    }

    public function error()
    {
        include_once("views/pages/error.php");
    }
}


?>