<!doctype html>
<html lang="es">
<head>
<title>Llenar select HTML con MySQL PHP: Ejemplos - BaulPHP</title>
</head>
<body>
<header> 
</header>
<div class="container">
    <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <?php
  $mysqli = new mysqli('localhost', 'root', '', 'sistema1');
?>
      <div align="left">
        <p>Seleccione un pais del siguiente menú:</p>
          <div class="form-group mx-sm-3 mb-2">
            <label for="paises" class="sr-only">Paises:</label>
            <select class="form-control" >
              <option value="">Seleccione:</option>
              <?php
          $query = $mysqli -> query ("SELECT * FROM tipo");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['idTipo'].'">'.$valores['Tipo'].'</option>';
          }
        ?>
            </select>
          </div>
          <button class="btn btn-primary mb-2">Enviar</button>
       
      </div>
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
</body>
</html>