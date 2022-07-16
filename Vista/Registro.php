<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./Vista/estilos.css">
    <title>Feria Virtual</title>
  </head>
  <body>
    <div class="py-5">
        <div class="card w-50 mx-auto">
          <div class="card-body px-4">
            <form method="post" action="index.php?controlador=Registro&accion=CrearRegistro">
              <div class="cbody">
                <div class="mx-auto" style="width: 250px;">
                <img src="https://admision.covao.org/Grafica/image/logo.png" class="img-fluid pt-4">
                <h1 class="pt-3 txtregistro fs-2 text-center">Feria Virtual</h1>
                </div>
                <p class="text-center pt-3 pb-4">Registrate para recibir mas informacion de la Feria Virtual</p>
                <div class="input-group">
                  <input type="text" name="iptNombre" class="input" required>
                  <label for="name" class="input-label">Nombre</label>
                </div>
                <br>
                <div class="input-group">
                  <input type="text" name="iptApellido" class="input" required>
                  <label for="name" class="input-label">Apellido </label>
                </div>
                <br>
                <div class="input-group">
                  <input type="email" name="iptCorreo" class="input" required>
                  <label for="name" class="input-label">Correo </label>
                </div>
                <br>
                <div class="input-group">
                  <input type="text" name="iptCedula" class="input" required>
                  <label for="name" class="input-label">Cedula </label>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                  <a class="pe-2" href="index.php?controlador=Index&accion=Main">
                    <button type="button" class="btn btn-primary registro">Volver</button>
                  </a>
                  <button type="submit" class="btn btn-primary registro" >Aceptar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
