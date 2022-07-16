<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./Vista/estilos.css">
    <title>Feria Virtual</title>
  </head>
  <body>
    <div class="pt-5">
        <div class="card w-50 mx-auto">
          <div class="card-body">
            <form method="post" action="index.php?controlador=Administradores&accion=ModificarAdmin">
              <div class="cbody">
                <div>
                  <h1 class="py-2 txtregistro fs-4">Modificar Administradores</h1>
                </div>
                <div class="input-group">
                  <input type="hidden" name="id" value="<?php echo $admin->getId()?>">
                  <input type="text" name="nombre" class="input" value="<?php echo $admin->getNombre()?>" required>
                  <label for="name" class="input-label">Nombre</label>
                </div>
                <br>
                <div class="input-group">
                  <input type="text" name="apellido" value="<?php echo $admin->getApellido()?>" class="input" required>
                  <label for="name" class="input-label">Apellido </label>
                </div>
                <br>
                <div class="input-group">
                  <input type="email" name="correo" value="<?php echo $admin->getCorreo()?>" class="input" required>
                  <label for="name" class="input-label">Correo </label>
                </div>
                <br>
                <div class="input-group">
                  <input type="password" name="contrasena" value="<?php echo $admin->getContrasena()?>" class="input">
                  <label for="name" class="input-label">Contraseña</label>
                </div>
                <br>
                <div class="input-group">
                    <select class="form-select" name="estado" aria-label="Default select example">
                    <option selected disabled><?php 
                                if($admin->getEstado() == 1 ){
                                    echo "Activo";
                                }else{
                                    echo "Inactivo";
                                }?></option>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo  </option>
                    </select>
                </div>
                <br>
                <div class="mx-auto" style="width: 200px;">
                <button type="submit" class="btn btn-primary registro">Modificar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

