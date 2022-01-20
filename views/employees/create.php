<hr />
<br>
<div class="card">
    <div class="card-header bg-dark text-white">
        Crear Empleado
    </div>
    <div class="card-body">
        
        <form action="" method="post" id="frmCreate">
            <div class="mb-3 row">
              <label for="" class="col-sm-2 form-label">Nombre Completo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="FullName" id="FullName" aria-describedby="helpId" placeholder="Nombre">
              </div>              
            </div>
            <div class="mb-3 row">
              <label for="" class="col-sm-2 form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="Email" id="Email" aria-describedby="helpId" placeholder="Email">
              </div>              
            </div>
            <div class="mb-3 row">
              <label for="" class="form-label col-sm-2">Sexo</label>
                <div class="col-sm-2">
                    <input type="radio" id="Gender" name="Gender" value="Masculino">
                    <label for="Masculino">Masculino</label>
                    <br />
                    <input type="radio" id="Gender" name="Gender" value="Femenino">
                    <label for="Femenino">Femenino</label>
                </div>
            </div>
            <div class="mb-3 row">
              <label for="" class="form-label col-sm-2">Area</label>
              <div class="col-sm-10">
                <select class="form-control" name="Area" id="Area">
                  <option value="" selected>Selecione Area</option>
                  <?php 
                  foreach ($listAreas as $a){
                  ?>
                    <option value="<?php echo $a->id; ?>"><?php echo $a->nombre; ?></option>
                    <?php
                    }
                    ?>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="" class="form-label col-sm-2">Descripcion</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="Description" id="Description" rows="3"></textarea>
              </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <input type="checkbox" id="Bulletin" name="Bulletin" value="1"> 
                    <label for="scales">Deseo Recibir el boletin Informativo</label>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2">Roles</div>
                <div class="col-sm-6">
                  <?php            
                  foreach ($listRoles as $r) {  
                  ?>
                    <input type="checkbox" id="Rol" name="Rol" value="<?php echo $r->id?>">
                    <label for="Rol"><?php echo $r->nombre; ?></label>
                    <br />
                    <?php
                  }
                    
                    ?>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <input type="submit" name="save" id="save" value="Guardar" class="btn btn-primary btn-lg">
                </div>
            </div>    
        </form>

    </div>
    
</div>

