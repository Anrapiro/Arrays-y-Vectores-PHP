<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Area de un rectangulo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <br>
      <div class="container">
      <h1 class="alert alert-success">Area de un rectangulo</h1>
      <form class="" action="index7.php" method="post">
        <div class="col-3">
          Ingrese la base del rectangulo:<input class="rounded form-control"type="" name="base" value="" placeholder="" required>
          Ingrese la altura del rectangulo:<input class="rounded form-control"type="" name="altura" value="" placeholder="" required>
        </div>
        <input  class="btn btn-success rounded-circle"type="submit" name="" value="Evaluar" required>
      </form>
      <h4 class="alert alert-info">
        <?phpif ($_POST) {
        $datos= array($_POST['base'],$_POST['altura']);
        echo "El area del rectangulo es de: ".($datos[0]*$datos[1]);
        }?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
