<?php
require "PHPMailer/PHPMailerAutoload.php";
    function smtpmailer($to, $from, $from_name, $subject, $body){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = 'quintasparaisocampestre.com';
        $mail->Port = 465;  
        $mail->Username = 'autoreply@quintasparaisocampestre.com';
        $mail->Password = 'quintacampestreautoreply';   
   

        $mail->IsHTML(true);
        $mail->From="autoreply@quintasparaisocampestre.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }
    
    $to   = 'wilbert@9ti.com.mx';
    $from = 'autoreply@quintasparaisocampestre.com';
    $name = 'QUINTAS PARAISO CAMPESTRE';
    $subj = 'PHPMailer 5.2 testing from DomainRacer';
    $msg = 'This is mail about testing mailing using PHP.';
    
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    
?>

<html>
    <head>
        <title>PHPMailer 5.2 testing from DomainRacer</title>
    </head>
    <body style="background: black;">
        <center><h2 style="padding-top:70px;color: white;"><?php echo $error; ?></h2></center>
    </body>
    
</html>