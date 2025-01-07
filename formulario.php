<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body id="Cuerpo">
<div id="contenedor"class="w-100">
  <form method="POST" id="Formulario" class="w-100">
  
    
  <div id="carouselExampleIndicators" class="carousel slide w-100 justify-content-center align-items-center">

  
  <div class="carousel-inner">



<!-- Acá comienzan los items del carrusel-->
    <div class="carousel-item active">
    <h3 class="text-white text-center mb-5 mt-5 configTextoh3"> Ingrese su nombre</h3>
      <div class="form-floating mb-3">
        <input type="text" name="nombreMotorista" class="form-control configInput UPtext" id="floatingInput">
        <label class="configLabel" for="floatingInput">Ejemplo: GERARDO RUIZ</label>
      </div>
    </div>

    <div class="carousel-item">
    <h3 class="text-white text-center mb-5 mt-5 configTextoh3"> Ingrese el nombre del barco</h3>
      <div class="form-floating mb-3">
        <input type="text" name="nombreBarco" class="form-control configInput UPtext" id="floatingInput" >
        <label class="configLabel" for="floatingInput">Ejemplo: MSCMONSERRAT, TIFFANY </label>
      </div>
    </div>

    <div class="carousel-item">
    <h3 class="text-white text-center mb-5 mt-5 configTextoh3"> Ingrese la fecha</h3>
      <div class="form-floating mb-3">
        <input type="date" name="fecha" class="form-control configInput" id="floatingInput">
        <label class="configLabel" for="floatingInput">Fecha.</label>
      </div>
    </div>

    <div class="carousel-item">
    <h3 class="text-white text-center mb-5 mt-5 configTextoh3"> Ingrese el dueño del camión</h3>
      <div class="form-floating mb-3">
        <input type="text" name="nombreDueñoCamion" class="form-control configInput UPtext" id="floatingInput" value="SOLUCIONESLEGALESA&A S.A. DE C.V.">
        <label class="configLabel" for="floatingInput">Nombre del dueño.</label>
      </div>
    </div>

    <div class="carousel-item">
    <h3 class="text-white text-center mb-5 mt-5 configTextoh3"> Ingrese la placa del camión</h3>
      <div class="form-floating mb-3">
        <input type="text" name="placaCamion" class="form-control configInput" id="floatingInput">
        <label class="configLabel" for="floatingInput">Ejemplo: 120284</label>
      </div>
    </div>

    <div class="carousel-item">
    <h3 class="text-white text-center mb-5 mt-5 configTextoh3"> Ingrese el número de viaje.</h3>
      <div class="form-floating mb-3">
        <input type="text" name="numeroViaje" class="form-control configInput" id="floatingInput">
        <label class="configLabel" for="floatingInput">Ejemplo: 1, 2, 3, 45, 57</label>
      </div>
    </div>

    <div class="carousel-item">
    <h3 class="text-white text-center mb-5 mt-5 configTextoh3"> Ingrese el nombre del contenedor.</h3>
      <div class="form-floating mb-3">
        <input type="text" name="nombreContenedor" class="form-control configInput UPtext" id="floatingInput">
        <label class="configLabel" for="floatingInput">Ejemplo: TEMU, MSKU, OMAU, MCAU</label>
      </div>
    </div>

    <div class="carousel-item">
    <h3 class="text-white text-center mb-5 mt-5 configTextoh3"> Ingrese el número del contenedor.</h3>
      <div class="form-floating mb-3">
        <input type="text" name="numeroContenedor" class="form-control configInput" id="floatingInput">
        <label class="configLabel" for="floatingInput">Ejemplo: 15479352, 6459595</label>
      </div>
    </div>

    <div class="carousel-item">
    <h3 class="text-white text-center mb-5 mt-5 configTextoh3"> Ingrese el número de la ficha.</h3>
      <div class="form-floating mb-3">
        <input type="text" name="numeroFicha" class="form-control configInput" id="floatingInput">
        <label class="configLabel" for="floatingInput">Ejemplo: 15, 65, 124</label>
      </div>
    </div>

    <div class="carousel-item">
    <h3 class="text-white text-center mb-5 mt-5 configTextoh3"> Ingrese el tipo de viaje.</h3>
      <div class="form-floating mb-3">
        <input type="text" name="tipoDeViaje" class="form-control configInput UPtext" id="floatingInput">
        <label class="configLabel" for="floatingInput">Ejemplo: NACIONAL, INTERNACIONAL, CEPA</label>
      </div>
    </div>

    





  </div>




  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<input type="submit" name="send" class="btn configBtn btn-danger fs-4" value="Enviar">
</form>







    <!-- 
    <form method="post" autocomplete="off">
    <h1 class="logo">Registro de Viaje</h1>

    <div id="form-box">
      <i id="prev-btn" class="fas fa-arrow-left"></i>
      <i id="next-btn" class="fas fa-arrow-right"></i>
      <div id="input-group">

        <input id="input-field" name="nombreMotorista" required>
        <label id="input-label"></label>
        <div id="input-progress"></div>
      </div>
      <div id="progress-bar"></div>
    </div>
    <input type="submit" name="send" class="btn" value="Enviar">
    </form>
    -->
    <?php
        include('send.php');
    ?>
  </div>

  <script src="main.js"></script>
    
</body>
</html>