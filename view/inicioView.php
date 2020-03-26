<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media='screen,print' />
    <link href="assets/lib/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media='screen,print' />
    <link rel="stylesheet" href="assets/lib/swiper/dist/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Fuentes.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/Inicio.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <style>
        .img-responsive{
            background-repeat: no-repeat !important;
        }
        
        .espacio-top{
            padding-top: 10rem;
        }
        .espacio-bottom{
            padding-bottom:5rem;
        }
        
        .center {
            text-align: center;
        }
        .justify {
            text-align: justify;
        }
        .right {
            text-align: right;
        }
        

        
    </style>
</head>


<body>

    <?php include('view/includes/navbar.php')?>


    <!-- Swiper -->
    <div class="desktop_slider swiper-container ">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(images/FOTO01.png)">
                <div class="carousel-caption bottom" >
                    <img class="Logo-Swiper" src="images/LOGO QUINTAS PARAISO.png" class="img-responsive"  alt="Logo">
                </div>
            </div>
            <div class="swiper-slide" style="background-image:url(images/FOTO02.jpg)">
                <div class="carousel-caption bottom" >
                    <img class="Logo-Swiper" src="images/LOGO QUINTAS PARAISO.png" class="img-responsive"  alt="Logo">
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>

    <!-- Swiper -->
    <div class="mobile_slider swiper-container">
        <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url(images/FOTO03.jpg)">
            <div class="carousel-caption bottom" >
                <img class="Logo-Swiper" src="images/LOGO QUINTAS PARAISO.png" class="img-responsive"  alt="Logo">
             </div>    
        </div>
        <div class="swiper-slide" style="background-image:url(images/FOTO04.jpg)">
            <div class="carousel-caption bottom" >
                <img class="Logo-Swiper" src="images/LOGO QUINTAS PARAISO.png" class="img-responsive"  alt="Logo">
            </div>
        </div>
        
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>

    

    <div class="NuestroConcepto Titulo center">
        <h2 class="FraseInicial">“Asegure su bienestar, lotes de <b style="color:#f0e807;"><br>alta plusvalía</b>”</h2>
        <div class="container">
            <div clas="row">
                <div class="col-sm-12 col-xs-12">
                    <div class=""><div class="IconoBienestar"></div></div>
                        <div class="Subtitulo">
                            <h1>BIENESTAR</h1>
                        </div>
                        <div class="Contenido center">
                            Lo mejor es contar con un lugar a donde llegar para tus días de descanso y tener muchos momentos de relajación. 
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="CabeceraTriangular">
        <h1>LOTES CAMPESTRES</h1>
    </div>

    <!--CONTENIDO Lotes Campestre-->
    <div class="LotesCampestre container-fluid">  
        
        <div class="container">
            <div class="row">
                <div class="col-sm-2  col-xs-12">
                    <div class="iconLote center">
                        <div class="IconoPlusvalia">
                            <img src="images/PLUSVALIA.png">
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-xs-12">
                    <div class="Subtitulo">
                        <h1>PLUSVALÍA</h1>
                    </div>
                    <div class="Contenido">
                    Invertir en tierra es el negocio más rentable, debido a que su valor incrementa con el paso del tiempo. Si la propiedad que adquieras cuenta con una buena ubicación el crecimiento puede ser de hasta un <b class="numero">20%</b> anual.
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="iconLote center">
                        <div class="IconoInversion">
                            <img src="images/INVERSION.png">
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-xs-12">
                    <div class="Subtitulo">
                        <h1>INVERSIÓN</h1>
                    </div>
                    <div class="Contenido">
                    Es posibilidad adquirir un terreno con un capital no tan alto, lo mejor es que tu dinero trabaja solo generando un ROI y beneficios económicos para ti.
                    </div>
                </div>
                <div class="col-sm-12 center">
                    <h3 class="NotaApartar"><b>*Aparta con $10,000.00 pesos, 20% de enganche, y paga el saldo hasta en 24 meses sin intereses*</b></h3>
                </div>
            </div>
        </div>
    </div>
    
    <div id="mapa" class="CabeceraUbicacion">
        <h1>UBICACIÓN</h1>
    </div>
    <div id="map-canvas" class='google-container'></div>
    <!--<section id="croquis" class="croquis">
        <div class="container espacio-top espacio-bottom">
            <div class="row">
                <div class="col-sm-6"> 
                    <img class="img-responsive" width=100% src="images/MAPA.png">
                </div>
                <div class="col-sm-6">
                    <ul>
                        <li>
                            <h3>
                                <div class="iconCroquis center">
                                <img src="images/CASA SAN BRUNO.png">
                                </div>&nbsp;&nbsp;Casa San Bruno
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <div class="iconCroquis center">
                                <img src="images/XCAMBO.png">
                                </div>&nbsp;&nbsp;Zona Arqueológica de Xcambo
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <div class="iconCroquis center">
                                <img src="images/CHARCAS DE AGUA.png">
                                </div>&nbsp;&nbsp;Charcas de Sal
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <div class="iconCroquis center">
                                <img src="images/LAGO.png">
                                </div>&nbsp;&nbsp;Lago
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <div class="iconCroquis center">
                                <img src="images/HOTEL REEF YUCATAN.png">
                                </div>&nbsp;&nbsp;Hotel Reef Yucatán
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <div class="iconCroquis center">
                                <img src="images/MARINA.png">
                                </div>&nbsp;&nbsp;Grand Marina Kinuh
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <div class="iconCroquis center">
                                <img src="images/TELCHAC PUERTO.png">
                                </div>&nbsp;&nbsp;Telchac Puerto
                            </h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>-->

    <!--UBICACION Y CARACTERÍSTICAS-->
    <div class="container-fluid section2">   
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 Ficha">
                    <div class=""><div class="IconoBienestar"></div></div>
                    <div class="Subtitulo center">
                        <h2 class="">UBICACIÓN</h2>
                    </div>
                    <div class="Contenido">
                        <ul>
                            <li>5 minutos de las playas de Telchac </li>
                            <li>Entrada privada directo a la carretera</li>
                            <li>5 minutos de Dzemul y a 10 minutos de la Zona Arqueológica de Xcambo</li>
                            <li>10 minutos de La Gran Marina Kinuh y del Hotel Reef Yucatán</li>
                            <li>15 minutos de Telchac Puerto</li>
                        </ul> 
                    </div>
                </div>
                
                <div class="col-sm-6 col-xs-12 Ficha">
                    <div class=""><div class="IconoPlusvalia"></div></div>
                    <div class="Subtitulo center">
                        <h2>CARACTERÍSTICAS</h2>
                    </div>
                    <div class="Contenido">
                     <ul>
                         <li>Zona de alto valor catastral</li>
                         <li>Facilidades de pago (20% de enganche y hasta 24 meses sin intereses)</li>
                         <li>Financiamiento para construcción de palapas y piscinas</li>
                         <li>Servicio de energía eléctrica a pie del lote</li>
                         <li>Banquetas</li>
                     </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <section id="Slogan">
        <div class="section3">
            <div class="container" style="">
                <div class="justify">
    
                        <div class="col-sm-3"></div>
                        <div class="MensajePreventa col-sm-6">
                            <h2>No te vendemos futuro, te ofrecemos presente.
                            <br><br>La mejor inversión en Yucatán, con plusvalía inmediata, todos los servicios y con certeza patrimonial.
                            <br><br><br><p class="right">Preventa Otoño 2019</p></h2>
                            
                        </div> 
               
                </div>
            </div>
        </div>
    </section>

    <?php include('view/includes/footer.php')?>

    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Config_navbar.js"></script>
          
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=&sensor=true"></script>
    
    <script type="text/javascript" src="assets/js/Mapa.js"></script>  

    <script src="assets/lib/swiper/dist/js/swiper.min.js"></script>

    <script>
        var swiper = new Swiper('.desktop_slider', {
        spaceBetween: 30,
        effect: 'fade',
        zoom: false,loop: true,
        autoplay: {delay: 5000,disableOnInteraction: false,},
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });

        var swiper2 = new Swiper('.mobile_slider', {
        spaceBetween: 30,
        effect: 'fade',
        zoom: false,loop: true,
        autoplay: {delay: 5000,disableOnInteraction: false,},
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
    </script>
    

    <script type="text/javascript">
        $(window).ready(function(){
            muestraMapa();
        });   
    </script>
</body>

</html>