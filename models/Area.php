<?php


class Area{
    private $id;
    private $nombre;


    public function showallareas()
    {
        $cnn = BD::conection();
        $sql = $cnn -> prepare("select * from Areas");
        $sql->execute();
        $objlist = $sql->FetchAll(PDO::FETCH_OBJ);
        return $objlist;
    }
}


?>