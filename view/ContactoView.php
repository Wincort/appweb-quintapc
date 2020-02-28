<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media='screen,print' />
    <link href="assets/lib/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media='screen,print' />

    <link rel="stylesheet" href="assets/css/Fuentes.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/Lotes.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/lib/metro-notifications/static/css/MetroNotificationStyle.min.css">
    
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
    #formulario {
    font-family: "MS Reference Sans Serif";
    font-weight: bold;
    margin-right: 2rem;
    margin-top: 2rem;
    margin-bottom: 2rem;
}

#formulario input,
#formulario textarea {
    margin: 1rem;
    border-color: #B5D6A9;
    border-radius: 1rem;
}

#formulario input:focus,
#formulario textarea:focus {
    border-color: #327522;
    box-shadow: none;
}

#formulario input {
    height: 5rem;
}

body {
    overflow-x: hidden;
}

.ColFormulario {
    padding: 0 1rem;
}

.DivGuardar {
    text-align: center;
    margin-top: 1.5rem;
}

.form-contacto {
    padding-top: 2rem;
    padding-bottom: 2rem;
}

.btn-success {
    font-size: xx-large;
    /*border-radius: 20px;*/
    letter-spacing: 0.2rem;
    font-weight: bold;
}

.btn-success,
.btn-success:focus {
    background-color: #3C9118;
    border-color: #3C9118;
}

.btn-success:hover {
    background-color: #327522 !important;
    border-color: #327522 !important;
}
    </style>
</head>

<body class="section1">

    <?php include('view/includes/navbar.php')?>
    <h1 id="Titulo"><b>CONTACTO</b></h1>
    <div class="container-fluid" style="">          
        <div class="row">
            <div class="col-sm-2 col-xs-12"></div>
            <div class="col-sm-8 col-xs-12 form-contacto">
                
                <form id='formulario' method='post' action='' target='_self' onsubmit="return false;" enctype="multipart/form-data" autocomplete="off">                
                    
                        <div class="row">
                            <div>
                                <input id="opc" name="opc" type="hidden" value="GuardarComentario">
                            </div>
                            <div class="col-sm-6 ColFormulario">
                                <input id="nombre" name="nombre" type="text" class="form-control requerido" placeholder="NOMBRE">
                            </div>
                            <div class="col-sm-6 ColFormulario">
                                <input id="apellido" name="apellido" type="text" class="form-control requerido" placeholder="APELLIDO">
                            </div>
                        </div>	
                        <div class="row">
                            <div class="col-sm-6 ColFormulario">
                                <input id="correo" name="correo" type="email" class="form-control requerido" onblur="validaMail(this.value, this.id);return false;" placeholder="EMAIL">
                            </div>
                            <div class="col-sm-6 ColFormulario">
                                <input id="telefono" name="telefono" type="text" class="form-control" onkeypress="return isNumberKey(event);" onblur="validaLongitud(this.id,10);return false;" maxlength="10" placeholder="TELÉFONO">
                            </div>
                        </div>	
                        <div class="row">	
                            <div class="col-sm-12 ColFormulario">
                                <textarea id="mensaje" name="mensaje" class="form-control requerido" rows="10" placeholder="MENSAJE"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 DivGuardar">
                                <button type="submit" id="enviarcorreo" onclick="ValidarFormulario();return false;" class="btn btn-success" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando">ENVIAR</button>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>

    <?php include('view/includes/footer.php')?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Config_navbar.js"></script>
    <script src="assets/lib/metro-notifications/static/js/MetroNotification.min.js"></script>
    <script src="assets/js/Notificaciones.js"></script>  
    <script src="assets/js/ValidarDatos.js"></script>
    <script src="assets/js/ProcesarMensajes.js"></script>


    <script type="text/javascript">
    </script>
</body>

</html>