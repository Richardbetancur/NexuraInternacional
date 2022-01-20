<hr />
<br>
<div class="container">
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2">
                <div class="d-grid gap-2">
                <a name="" id="" class="btn btn-success" href="?controller=employees&action=create" role="button">Crear</a>
                </div>
        </div>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th><i class="fas fa-user"></i>Nombre</th>
            <th><i class="fas fa-at"></i>Email</th>
            <th><i class="fas fa-venus-mars"></i>Sexo</th>
            <th><i class="fas fa-briefcase"></i>Area</th>
            <th><i class="fas fa-envelope"></i>Boletin</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($employees as $emp) {
            $bol = ($emp->boletin);
            $id = $emp->id;
            if($bol == 1)
            {
                $boletin = "SI";
            }else{
                $boletin = "NO";
            }
        ?>
        <tr>
            <td><?php echo $emp->nombre ?></td>
            <td><?php echo $emp->email ?></td>
            <td width="7%"><?php echo $emp->sexo ?></td>
            <td><?php echo $emp->area ?></td>
            <td><?php echo $boletin ?></td>
            <td><a name="" id="" class="btn btn-info" href="?controller=employees&action=edit&id=<?php echo $id ?>" role="button"><i class="far fa-edit"></i></a></td>
            <td><a name="" id="" class="btn btn-danger" href="?controller=employees&action=delete&id=<?php echo $id?>" role="button"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>
