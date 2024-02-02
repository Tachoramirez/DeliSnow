<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script  src="assets/js/materialize.min.js"></script>
</head>
<body>
  <div class="navbar">
    <nav class="black z-depth-2">
      <div class="nav-wrapper container">
        <a href="index.php" class="brand-logo ">DeliSnow</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="postres.php" class="">postres</a></li>
          <li><a href="#modal1" class="modal-trigger ">Conocenos</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
        <div class="col l12 m12 s12">
          <h4 class="a">¿Quienes somos?</h4>
        </div>

        <div class="col l12 m12 s12">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quisquam quae labore accusantium! Blanditiis tempora eligendi voluptatibus delectus odit aperiam necessitatibus, praesentium reprehenderit magnam ut excepturi accusantium numquam, ipsum deserunt?</p>
        </div>
      </div>

      <div class="row">
        <div class="col l12 m12 s12">
          <h4 class="a">Mision</h4>
        </div>
        <div class="col l12 m12 s12">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quisquam quae labore accusantium! Blanditiis tempora eligendi voluptatibus delectus odit aperiam necessitatibus, praesentium reprehenderit magnam ut excepturi accusantium numquam, ipsum deserunt?</p>
        </div>

        <div class="col l12 m12 s12">
          <h4 class="a">Vision</h4>
        </div>
        <div class="col l12 m12 s12">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quisquam quae labore accusantium! Blanditiis tempora eligendi voluptatibus delectus odit aperiam necessitatibus, praesentium reprehenderit magnam ut excepturi accusantium numquam, ipsum deserunt?</p>
        </div>
      </div>


      <br><br><br><br>

      <div class="row">
        <div class="col l12 m12 s12 center">
          <h4 class="a">Fundador</h4>
        </div>
        <div class="container">
          <div class="col l12 m12 s12 center">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator"  src="assets/img/postres/tiramisu.jpg">
              </div>
              <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Ma. Nieves Trujillo Tapia<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Ma. Nieves Trujillo Tapia<i class="material-icons right">close</i></span>
                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>
        </div>  
      </div>

    </div> 
    <div class="modal-footer">
      <a class="modal-close waves-effect waves-red btn-flat">cerrar</a>
    </div>
  </div>
</body>

<script>

    M.AutoInit();

    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
    });
</script>
</html>