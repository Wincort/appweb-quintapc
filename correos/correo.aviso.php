<?php
$Email=isset($_REQUEST['correo'])?$_REQUEST['correo']:"wilbert@9ti.com.mx";
$Nombre=isset($_REQUEST['nombre'])?$_REQUEST['nombre']:"---";
$Apellido=isset($_REQUEST['apellido'])?$_REQUEST['apellido']:"---";
$Telefono=isset($_REQUEST['telefono'])?$_REQUEST['telefono']:"---";
$Mensaje=isset($_REQUEST['mensaje'])?$_REQUEST['mensaje']:"---";

require "PHPMailer/PHPMailerAutoload.php";
    function smtpmailer($to, $from, $from_name, $subject, $body){
        $mail = new PHPMailer();
        //$mail->SMTPDebug = 2; 
        $mail->IsSMTP();
        $mail->SMTPAuth = false; 
        $mail->SMTPAutoTLS = false; 
        //$mail->SMTPSecure = 'tls'; 
        $mail->Host = 'localhost';
        $mail->Port = 25;  
        $mail->Username = '';
        $mail->Password = '';   
   
        $mail->CharSet = 'UTF-8';
        $mail->IsHTML(true);
        $mail->From="autoreply@quintasparaisocampestre.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        $mail->addBCC('winco117@gmail.com');
        $mail->addBCC('wincort@outlook.com');
        $mail->addBCC('wilbert@9ti.com.mx');
        if(!$mail->Send())
        {
            $error ='{"status":false,"titulo":"No se pudo enviar el correo","mensaje":"Intente enviar su mensaje más tarde"}';
            return $error; 
        }
        else 
        {
            $error = '{"status":true,"titulo":"¡Mensaje enviado!","mensaje":"Un miembro de nuestro equipo se contactará con usted"}';  
            return $error;
        }
    }
    
    $to   = "wilbert@9ti.com.mx";
    $from = 'autoreply@quintasparaisocampestre.com';
    $name = 'Quintas Paraíso Campestre';
    $subj = 'Un contacto envió un mensaje';
    $msg = '
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Quintas Paraíso Camprestre</title>
            <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
            <style>
                body,h1,h2,h3 {font-weight: 200;font-family: Century Gothic, sans-serif;color: #444242;}
                body{padding:5px; margin:5px; color:#444242;}
                a {text-decoration: none;color: #5C8B00;}
                hr {color: #444242;}
                p, .footer-table a {color: white;}
                .main-table{text-align:center; width:99%;border:0;background-color:#F4F5F5}
                .main-table td{text-align:center;}
                .linea1{color:black; font-size:25px;padding-top:3%;}
                .linea2{color:#5C8B00;}
                .linea3{color:#327522; font-weight: bold;}
                .linkWeb{font-family: "Oswald", sans-serif;color:#FFF; font-size:25px;letter-spacing:2px;font-weight: bolder;}
                .footer-table{text-align:center; width:100%;border:0;}
                .footer-table td{height:40;background-color:#5C8B00;text-align:center;}
                
            </style>
        </head>
        <body>
            <table class="main-table">
                <tr>
                    <td colspan="2" bgcolor="#566570">
                        <a href="https://www.quintasparaisocampestre.com" target="_blank">
                            <img src="https://www.quintasparaisocampestre.com/images/Email2.jpg" width="100%">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <h1 class="linea1">¡<b style="color:#327522;">'.$Nombre.' '.$Apellido.' </b> ha contactado al equipo de ventas!</h1>
                        <h2 class="linea2"><b>'.$Email.' <br> '.$Telefono.' <br> '. $Mensaje.'</b></h2>
                        <hr/>
                        <h3 class="linea3">Debes ponerte en contacto con esta persona a la brevedad.</h3>
                        <hr/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <footer>
                            <table class="footer-table">
                                <tr>
                                    <td>
                                        <a class="linkWeb" href="https://www.quintasparaisocampestre.com" target="_blank">www.quintasparaisocampestre.com</a><br>
                                        <p>Calle 18A número 248 x 27A Fracc. Monterreal Mérida, Yucatán.</p>
                                        <p>Teléfono: (999) 291 7755</p>
                                        <p>Correo: ventas@quintasparaisocampestre.com</p>
                                    </td>
                                </tr>
                            </table>
                        </footer>
                    </td>
                </tr>
            </table>
        </body>
    </html>';
    
    
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    echo $error;
?>