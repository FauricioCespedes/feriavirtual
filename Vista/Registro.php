<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Feria Virtual</title>
  </head>
  <body>
    <div class="container pt-5">
        <div class="card">
          <div class="card-body">
            <form method="post" action="index.php?controlador=Registro&accion=CrearRegistro">
              <div class="cbody">
                <div class="mx-auto" style="width: 250px;">
                <img src="https://admision.covao.org/Grafica/image/logo.png" class="img-fluid pt-4">
                  <h1 class="pt-3 txtregistro">Feria Virtual</h1>
                </div>
                <p class="text-center pt-3 pb-4">Registrate para ingresar a la Feria Virtual</p>
                <div class="input-group">
                  <input type="text" name="iptNombre" id="name" class="input" required>
                  <label for="name" class="input-label">Nombre</label>
                </div>
                <br>
                <div class="input-group">
                  <input type="text" name="iptApellido" id="name" class="input" required>
                  <label for="name" class="input-label">Apellido </label>
                </div>
                <br>
                <div class="input-group">
                  <input type="email" name="iptCorreo" id="name" class="input" required>
                  <label for="name" class="input-label">Correo </label>
                </div>
                <br>
                <div class="input-group">
                  <input type="text" name="iptCedula" id="name" class="input" required>
                  <label for="name" class="input-label">Cedula </label>
                </div>
                <br>
                <div class="mx-auto" style="width: 200px;">
                <button type="submit" class="btn btn-primary registro">Registrarme</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>