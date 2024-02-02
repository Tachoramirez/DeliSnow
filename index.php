<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <?php 
    include('nav.php');
    ?>
    <div class="row">
        <div class="parallax-container" style="height: 540px;">
            <div class="parallax"><img src="assets/img/postres/Carta-de-postres-1-1-scaled.webp"></div>
        </div>
    </div>
    <div class="section white">
        <div class="container">
            <div class="row">
                <h3 class="header center black-text a"><b>Frescura y sabor</b></h3>
            </div>
            <div class="row">
                <div class="col l4 m4 s12">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="assets/img/postres/buñuelos1.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Buñuelos<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Buñuelos<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col l4 m4 s12">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="assets/img/postres/flan cafe.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4 s12">Pastel Imposible <i class="material-icons right">more_vert</i></span>
                            
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Pastel Imposible <i class="material-icons right">close</i></span>
                            <p>
                            Flan napolitano de vainilla y cajeta sentado en una base de pastel estilo brownie
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col l4 m4 s12">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="assets/img/postres/pastelzanahoria.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Pastel de zanahoria<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Pastel de zanahoria<i class="material-icons right">close</i></span>
                            <p>
                            El pastel de zanahoria es un delicioso postre que combina la dulzura de las zanahorias con una mezcla de ingredientes
                            como harina, azúcar mascabado, huevos, nuez picada, arándanos y especias como canela, jengibre, cardamomo, clavo, pimienta de jamaica y nuez moscada. 
                            Un equilibrio perfecto entre lo dulce y lo ligeramente ácido. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l4 m4 s12">
                </div>
                <div class="col l4 m4 s12 center">
                    <a href="postres.php" class="btn black hoverable">Ver mas</a>
                </div>
                <div class="col l4 m4 s12">
                </div>
            </div>
        </div>
    </div>

    <div class="section black">
        <div class="container">
            <div class="row">
                <div class="col l4 m4 s6">
                    <p><a href="" class="white-text"><h5>Localizacion:</h5> </a></p>
                    <p>
                        <ul class="white-text">
                            <li><h6><b>Mercado Organico de Huatulco (M.O.H)</b></h6></li>
                            <li>Kiosco de la bahia Santa Cruz, Bahias de Huatulco, Oaxaca</li>
                            <li><h6><b>Pizzeria la Ragazza</b></h6></li>
                            <li>A Sta. Cruz Sector A, Santa Cruz Huatulco, Santa Cruz, 70987 Oaxaca, Oax.</li>
                        </ul>

                    </p>
                </div>
                <div class="col l4 m4 s6">
                    <p><a href="" class="white-text"><h5>Horarios:</h5></a></p>
                    <p>
                        <ul class="white-text">
                            <li>Sabados: 08:00 a 12:00 </li><br><br><br><br>
                            <li>Sabados y Domingos: 14:00 a 18:00</li>
                            <li>Miercoles: 17:00 a 20:00</li>
                        </ul>
                    </p>
                </div>
                <div class="col l4 m4 s12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d807.2482672786498!2d-96.13240788818193!3d15.754231978143004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85bf21a43ee58fe1%3A0x83e48074cf4db06c!2sMercado%20Org%C3%A1nico%20Huatulco!5e0!3m2!1ses-419!2smx!4v1706689517710!5m2!1ses-419!2smx" width="400" height="250" style="border: round;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <span class="white-text"><h5>Whatsapp: 951 586 1050</h5></span> 
                </div>
            </div>
        </div>
        
    </div>
</body>



<script>

    M.AutoInit();

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });
</script>
</html>