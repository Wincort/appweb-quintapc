<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primera Etapa</title>
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media='screen,print' />
    <link href="assets/lib/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media='screen,print' />
    <link href="https://iamceege.github.io/tooltipster/dist/css/tooltipster.bundle.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/Fuentes.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/Lotes.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <style>
    .img-responsive{
        background-repeat: no-repeat !important;
    }
    
    .espacio-top{
        margin-top: 5rem;
    }
    
    .center {
	    text-align: center;
    }
    .leyenda{
        width:2rem;
        height:2rem;
        display:inline-block;
    }

    .disponible{
        background-color:rgb(0, 174, 70);
    }
    .vendido{
        background-color:rgb(128, 46, 70);
    }
    .contienda{
        background-color:rgb(109, 156, 79);
    }
    #lista-leyenda{
        list-style: none;
        text-align:left;
    }
    #lista-leyenda li{
        /*display: inline;*/
        padding:1.5rem;
        background-color:rgba(0,0,0,0.75);
    }
    </style>
</head>

<body class="section1">

    <?php include('view/includes/navbar.php')?>

    <h1 id="Titulo"><b>PLANO ARQUITECTÓNICO</b></h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="Subtitulo-terreno">Primera Etapa</h3>
                <h3 class="Contenido-terreno">Se divide en <b class="numero">90</b> lotes campestre desde <b class="numero">1,000 </b>hasta <b class="numero">5,000 </b>m<sup><b class="numero">2</b></sup></h3>
            </div>
            <div class="col-sm-6">
                <h3 class="Subtitulo-terreno">Información</h3>
                <h3 class="Contenido-terreno">Aparta con $<b class="numero">10,000.00</b> pesos, <b class="numero">20</b>% de enganche, y paga el saldo hasta en <b class="numero">24</b> meses sin intereses
            </h3>
            </div>
        </div>
        <div class="row">
            <div id="Terreno1" class="col-sm-12">
                <div style="display:none;">
                    <a id="showAvailable" class="btn btn-success" href="#">Disponibles</a>
                    <a id="showBiding" class="btn btn-warning" href="#">En Disputa</a>
                    <a id="showSold"  class="btn btn-danger" href="#">Vendidos</a>
                </div> 
            </div>   
        </div>
        <div class="row">
            <div class="col-sm-3">
                <h3 class="Contenido-terreno">
                    <ul id="lista-leyenda">
                        <li><div class="leyenda disponible"></div> Disponible</li>
                        <li><div class="leyenda vendido"></div> Vendido</li>
                        <li><div class="leyenda contienda"></div> Contendiendo</li>
                    </ul>
                </h3>
            </div>
            <!--<div class="col-sm-2"></div>-->
            <div id="" class="col-sm-6">        
                
                <map name="map1">
    
                    <?php foreach($lotesVendidos as $lv) {?>

                        <area shape="poly" coords="<?php echo $lv->coordenadas; ?>" href="#!" alt="<?php echo $lv->codigo; ?>" title="<?php echo $lv->nombre; ?>" data-tooltip-content="#table_<?php echo $lv->id; ?>" class="sold tooltip" data-maphilight='{"fillColor":"ff0000"}'/>
                        <div style="display:none">
                            <div id="table_<?php echo $lv->id; ?>">
                                <table  class="table">
                                <tr  class="table-title"><td colspan=2><?php echo $lv->nombre; ?></td></tr>   
                                <tr><td>Dimensión</td><td><?php echo $lv->medida; ?> m<sup>2</sup></td></tr>
                                </table>
                            </div>
                        </div>
                        
                    <?php } ?>
                    
                    <?php foreach($lotesDisponibles as $ld) {?>
    
                        <area shape="poly" coords="<?php echo $ld->coordenadas; ?>" href="#!" alt="<?php echo $ld->codigo; ?>" title="<?php echo $ld->nombre; ?>" data-tooltip-content="#table_<?php echo $ld->id; ?>" class="available tooltip" data-maphilight='{"fillColor":"00ff00"}'/>
                        <div style="display:none">
                            <table id="table_<?php echo $ld->id; ?>"class="table">
                                <tr  class="table-title"><td colspan=2><?php echo $ld->nombre; ?></td></tr>
                                <tr>
                                <td>Dimensión</td><td><?php echo $ld->medida; ?> m<sup>2</sup> (<?php echo $ld->medida_detalle; ?>) </td>
                                </tr>
                                <tr>
                                <td>Precio por m<sup>2</sup></td><td>$<?php echo $ld->precio_m2; ?></td>
                                </tr>
                                <tr>
                                <td>Precio</sup></td><td>$<?php echo $ld->precio_contado; ?></td>
                                </tr>
                            </table>
                        </div>

                        
    
                    <?php } ?>
                    
                    <?php foreach($lotesDisputados as $ldis) {?>

                        <area shape="poly" coords="<?php echo $ldis->coordenadas; ?>" href="#!" alt="<?php echo $ldis->codigo; ?>" title="<?php echo $ldis->nombre; ?>" data-tooltip-content="#table_<?php echo $ldis->id; ?>" class="biding tooltip" data-maphilight='{"fillColor":"d9dc12"}'/>
                        <div style="display:none">
                            <table id="table_<?php echo $ldis->id; ?>"class="table">
                                <tr  class="table-title"><td colspan=2><?php echo $ldis->nombre; ?></td></tr>
                                <tr>
                                <td>Dimensión</td><td><?php echo $ldis->medida; ?> m<sup>2</sup> (<?php echo $ldis->medida_detalle; ?>) </td>
                                </tr>
                                <tr>
                                <td>Precio por m<sup>2</sup></td><td>$<?php echo $ldis->precio_m2; ?></td>
                                </tr>
                                <tr>
                                <td>Precio</sup></td><td>$<?php echo $ldis->precio_contado; ?></td>
                                </tr>
                            </table>
                        </div>
    
                    <?php } ?>
    
                </map>
                <img id="mapa" src="images/BROCHURE QUINTAS PARAISO 01.png" usemap="#map1" class="img-responsive map" style="margin: auto;width: 100%;" alt="Terreno Etapa 1" onerror="this.onerror=null;this.src='';">
            </div>
            
        </div>

       

    </div>

    <?php include('view/includes/footer.php')?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/imageMapResizer.min.js"></script>
    <script src="assets/js/jquery.maphilight.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Config_navbar.js"></script>

    <script src="https://iamceege.github.io/tooltipster/dist/js/tooltipster.bundle.js"></script>


    <script type="text/javascript">

        let options={
            strokeColor:"ffffff",
            strokeWidth:4,
            fillOpacity:0.5,
            shadow:false,
            shadowBackground:"ffffff",
        }

        function SimularClickColorEstados(){
            $('#showAvailable').trigger('click');
            $('#showSold').trigger('click');
            $('#showBiding').trigger('click');
        }
        
        let ConfigMapeo = () => {
            $('map').imageMapResize();
        }

        let ConfigMapHilight = () => {
            $('.map').maphilight(options);
        }

        $(document).ready(function() {
            ConfigMapeo();
            $(window).resize(function() {
                setTimeout(SimularClickColorEstados, 100);
                ConfigMapHilight();
                setTimeout(SimularClickColorEstados, 350);
            }).resize();
        }); 

        let GenerarEventosColorLotes= (selectorBoton,selectorClase) =>{
            $(selectorBoton).click(function(e) {
                e.preventDefault();
                var data = $(selectorClase).mouseout().data('maphilight') || {};
                data.alwaysOn = !data.alwaysOn;
                $(selectorClase).data('maphilight', data).trigger('alwaysOn.maphilight');
            });
        }

        GenerarEventosColorLotes('#showAvailable','.available');
        GenerarEventosColorLotes('#showSold','.sold');
        GenerarEventosColorLotes('#showBiding','.biding');

        $(document).ready(function(){
            setTimeout(SimularClickColorEstados, 100);
            $('.tooltip').tooltipster({
                contentAsHTML:true,
                trigger: 'custom',
                triggerOpen: {
                    mouseenter: true,
                    tap: true
                },
                triggerClose: {
                    mouseleave: true,
                    tap: true
                }
            }); 
        });

    </script>
</body>

</html>