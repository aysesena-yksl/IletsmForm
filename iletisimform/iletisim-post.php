<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
 

    require 'inc/config.php';
   if($_POST) {
     $adsoyad= $_POST["adsoyad"];
     $telefon=$_POST["telefon"];
     $mail=$_POST["mail"];
     $mesaj=$_POST["mesaj"];
     
     /**DB::insert("INSERT INTO iletisim(adsoyad, telefon, mail, mesaj) VALUES(?,?,?,?)",array(
         $adsoyad,
         $telefon,
         $mail,
         $mesaj
     ));  */


     $mail_icerik = "İletişim Formu Bilgileri Gönderildi.";
     $mail_icerik .="Ad Soyadı: $adsoyad<br>";
     $mail_icerik .="Telefon: $telefon<br>";
     $mail_icerik .="E-posta Adresi: $mail<br>";
     $mail_icerik .="Mesaj: $mesaj<br>";

 
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';


     $mail = new PHPMailer(true);

   try {

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //kimin üzerinden gönderen                    
        //$mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = '*******';                     // SMTP username
        $mail->Password   = '*******';                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   
        $mail -> Port  =587;      

        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' =>false,
            'allow_self_signed' => true
            )
        ); 
        

        $mail->setFrom('*******', 'İletisim Formu');           //kimden gideceği username ile aynı olur
        $mail->addAddress('******', 'Ayşe Sena Yüksel');     // mail gideceği 
        
        $mail->isHTML(true);         
        $mail->CharSet = 'UTF-8';                         
        $mail->Subject = 'Sitemizden İletişim Formu Gönderildi.';
        $mail->Body    = $mail_icerik;
        $mail->AltBody = $mail_icerik;

        $mail->send();
        echo 'Message has been sent';
        

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        die();
   } 
   
   header("Location:iletisim.php?success=1");   //Başarılı yanıtı iletisim.php yönlendirilir.

 }



    

?>
