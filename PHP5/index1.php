<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Promedio de 4 notas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <br>
      <div class="container">
      <h1 class="alert alert-success">Promedio de 4 notas</h1>
      <form class="" action="index1.php" method="post">
        <div class="row justify-content-around">
         <div class="col-3 pull-left">
           Digite nota N°1<input class="rounded form-control"type="number" name="n1" value="" min="0" max="10" placeholder="Digite nota" required >
           Digite nota N°2<input class="rounded form-control"type="number" name="n2" value="" min="0" max="10" placeholder="Digite nota" required >
         </div>
         <div class="col-3">
           Digite nota N°3<input class="rounded form-control"type="number" name="n3" value="" min="0" max="10" placeholder="Digite nota" required >
           Digite nota N°4<input class="rounded form-control"type="number" name="n4" value="" min="0" max="10" placeholder="Digite nota" required >
         </div>
        </div>
        <input  class="btn btn-success rounded-circle"type="submit" name="" value="Evaluar" required>
      </form>
      <h4 class="alert alert-info">
        <?php if ($_POST) {
        $array = array($_POST['n1'],$_POST['n4'],$_POST['n2'],$_POST['n3'],);
       $n=count($array);
       $suma=0;
       for ($i=0; $i <$n ; $i++) {
         echo "Nota ".($i+1)." : ".$array[$i]."<br>";
         $suma=($suma+$array[$i]);
       }
       echo "El promedio es de: ".($suma/$n);
        }?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
