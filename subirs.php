<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ayuda a un pony</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <script src="js/sidemenu.js" defer> </script>
</head>



  <body>
    <ul class="barranav">
      <li class="list1"><a class="active" href="index.html">Inicio</a></li>
      <li class="list1"><a href="#news">Subir Archivo</a></li>
      <li class="list1" style="margin-left: 450px; border: none;"> <a> AYUDA A UN PONY </a> </li>
      <li class="list1" style="float: right"><img
          style="width: 70px; margin-top: 2px; margin-bottom: 4px; margin-right: 10px; margin-left: 10px;"
          src="images/Logo_Pony.png"></li>
      
    </ul>
    <br><br>

    <div class="btn">
      <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
      <div class="text">Carreras</div>
      <ul>
        <li>
          <a href="#" class="ISC">ISC
            <span class="fas fa-caret-down first"></span>
          </a>
          <ul class="ISC">
              
              <li><a href="#.html">Semestre1</a></li>
              <li><a href="#.html">Semestre2</a></li>
              <li><a href="#.html">Semestre3</a></li>
              <li><a href="#.html">Semestre4</a></li>
              <li><a href="#.html">Semestre5</a></li>
              <li><a href="ISC1.html">Semestre6</a></li>
              <li><a href="#.html">Semestre7</a></li>
              <li><a href="#.html">Semestre8</a></li>
              <li><a href="#.html">Semestre9</a></li>
              <li><a href="#.html">Semestre10</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="IBQ">Bioquimica
            <span class="fas fa-caret-down second"></span>
          </a>
          <ul class="IBQ">
            <li><a href="#.html">Semestre1</a></li>
            <li><a href="#.html">Semestre2</a></li>
            <li><a href="#.html">Semestre3</a></li>
            <li><a href="#.html">Semestre4</a></li>
            <li><a href="#.html">Semestre5</a></li>
            <li><a href="#.html">Semestre6</a></li>
            <li><a href="#.html">Semestre7</a></li>
            <li><a href="#.html">Semestre8</a></li>
            <li><a href="#.html">Semestre9</a></li>
            <li><a href="#.html">Semestre10</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="IND">Industrial
            <span class="fas fa-caret-down third"></span>
          </a>
          <ul class="IND">
            <li><a href="#">Semestre1</a></li>
            <li><a href="#">Semestre2</a></li>
            <li><a href="#">Semestre3</a></li>
            <li><a href="#">Semestre4</a></li>
            <li><a href="#">Semestre5</a></li>
            <li><a href="#">Semestre6</a></li>
            <li><a href="#">Semestre7</a></li>
            <li><a href="#">Semestre8</a></li>
            <li><a href="#">Semestre9</a></li>
            <li><a href="#">Semestre10</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="IE">Electronica
            <span class="fas fa-caret-down fourth"></span>
          </a>
          <ul class="IE">
            <li><a href="#">Semestre1</a></li>
            <li><a href="#">Semestre2</a></li>
            <li><a href="#">Semestre3</a></li>
            <li><a href="#">Semestre4</a></li>
            <li><a href="#">Semestre5</a></li>
            <li><a href="#">Semestre6</a></li>
            <li><a href="#">Semestre7</a></li>
            <li><a href="#">Semestre8</a></li>
            <li><a href="#">Semestre9</a></li>
            <li><a href="#">Semestre10</a></li>
          </ul>
        </li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>
    <div class="content" style="top:60%;">
      <div class="header" style="width:100%; margin-left: 20%;">Ayuda a un pony con sus estudios</div>
      <p style="width:100%; margin-left: 20%;">Y envianos tus libros, trabajos, examenes o guias de estudio!! <br>
        Nosotros la publicaremos en esta pagina para que todos los ponys estudiemos.
      </p>
      <div style="margin-left: 40%; margin-top: 10%;">
      <form action="subir.php" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Archivos a subir</label>
          <input class="form-control" type="file" id="formFileMultiple" name="archivo" multiple>
        </div>

        <div class="form-floating mb-3">
          <label for="floatingInput">Nombre</label>
          <input type="text" class="form-control" id="Nombre Completo" name="nom" placeholder="Juan Perez">
          
        </div>

        <div class="form-floating mb-3">
          <label for="floatingInput">Carrera</label>
          <input type="text" class="form-control" id="Carrera" name="carr" placeholder="Carrera del documento a subir">
          
        </div>
        
        <button type="submit" class="button1">
          Enviar
        </button>


      </form>
    </div>
      
      
    </div>
    
  </body>

</html>