<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Salario neto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <br>
      <div class="container">
        <h1 class="alert alert-success">Salario neto</h1>
        <form class="" action="index2.php" method="post">
        <div class="col-3">
          Ingrese horas trabajadas:<input class="rounded form-control"type="" name="ht" value="" placeholder="" required>
          Ingrese tarifa horaria:<input class="rounded form-control"type="" name="th" value="" placeholder="" required>
          Ingrese tasa de impuestos:<input class="rounded form-control"type="" name="ti" value="" placeholder="" required>
        </div>
        <input  class="btn btn-success rounded-circle"type="submit" name="" value="Evaluar" required>
      </form>
      <h4 class="alert alert-info">
        <?php if ($_POST) {
         $datos= array($_POST['ht'],$_POST['th'],$_POST['ti']);
         $pn=($datos[0]*$datos[1])-$datos[2];
         echo "El pago neto del trabajador es: $pn";
        }?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
