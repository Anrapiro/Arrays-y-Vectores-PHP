<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>area y perimetro deltoide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <br>
      <div class="container">
      <h1 class="alert alert-success">Area y perimetro deltoide</h1>
      <form class="" action="index3.php" method="post">
        <div class="col-3">
          Ingrese la diagonal mayor:<input class="rounded form-control"type="" name="dM" value="" placeholder="" required>
          Ingrese la diagonal menor:<input class="rounded form-control"type="" name="dm" value="" placeholder="" required>
          Ingrese el lado superior: <input class="rounded form-control"type="" name="ls" value="" placeholder="" required>
          Ingrese el lado Inferior: <input class="rounded form-control"type="" name="li" value="" placeholder="" required>
        </div>
        <input  class="btn btn-success rounded-circle"type="submit" name="" value="Evaluar" required>
      </form>
      <h4 class="alert alert-info">
        <?php if ($_POST) {
        $datos= array('DM'=>$_POST['dM'],'dm'=>$_POST['dm'],'LS'=>$_POST['ls'],'li'=>$_POST['li']);
        echo "El area del deltoide es: ".($datos['DM']*$datos['dm']);
          echo "<br>El perimetro del deltoide es: ".($datos['LS']*$datos['li']);
        }?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
