<!doctype html>
<html lang="es">
  <head>
    <title>Prueba Tecnica Nexura</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body>
      

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#">Nexura <span class="visually-hidden">(current)</span></a>
        <a class="nav-item nav-link" href="?controller=page&action=home">Home</a>
        <a class="nav-item nav-link" href="?controller=employees&action=show">Empleados</a>
    </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php include_once("root.php") ?>
            </div>
            
        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


    <script>

      function validace(formulario)
      {
          if (formulario.FullName.value == "")
          {
              Swal.fire("Por favor ingrese un Nombre");
              formulario.FullName.focus();
              return (false);
          }

          if (formulario.Email.value == "")
          {
              Swal.fire("Por favor ingrese un Email");
              formulario.Email.focus();
              return (false);
          }

          if (formulario.Gender.checked == false)
          {
              Swal.fire("Por favor seleccione un Genero ");
              formulario.Gender.focus();
              return (false);

          }

          if (formulario.Area.value == "")
          {
              Swal.fire("Por favor seleccione un Area ");
              formulario.Area.focus();
              return (false);
          }

          if (formulario.Description.value == "")
          {
              Swal.fire("Por favor Ingrese una Descripcion ");
              formulario.Description.focus();
              return (false);
          }

          if (formulario.Rol.checked == false)
          {
              Swal.fire("Por favor seleccione un Rol ");
              formulario.Rol.focus();
              return (false);
          }


          return (false);
      }


</script>
  </body>
</html>