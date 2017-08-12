<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>area de un triangulo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <br>
      <div class="container">
      <h1 class="alert alert-success">Area de un circulo</h1>
      <form class="" action="index5.php" method="post">
        <div class="col-3">
          Ingrese el radio del circulo:<input class="rounded form-control"type="" name="radio" value="" placeholder="" required>
        </div>
        <input  class="btn btn-success rounded-circle"type="submit" name="" value="Evaluar" required>
      </form>
      <h4 class="alert alert-info">
        <?php if ($_POST) {
        $datos= array($_POST['radio'],3.14);
        echo "El area del circulo es de: ".(($datos[0]*$datos[0])*$datos[1]);
        }?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
