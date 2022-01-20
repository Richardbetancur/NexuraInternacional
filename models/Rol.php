<?php

class Rol{

    private $id;
    private $nombre;


    public function showallRoles()
    {
        $cnn = BD::conection();
        $sql = $cnn -> prepare("select * from roles");
        $sql->execute();
        $objlist = $sql->FetchAll(PDO::FETCH_OBJ);
        return $objlist;
    }
}

?>