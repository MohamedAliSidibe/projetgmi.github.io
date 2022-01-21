<html>
   
   <head>
      <title> Sending HTML email using PHP </title>
   </head>
   
   <body>
      
      <?php
         $to = "momojr59@gmail.com";
         $subject  = 'Examen Mr Kissi';
         $message  = 'Bonjour Mr Kissi, jai bien fait examen:';
         //$header = "From:momojr59@gmail.com \r\n";
         //$header .= "Cc:benyoussefmhamed990@gmail.com \r\n";
         $headers  = 'From: [edmodotek]@gmail.com' . "\r\n" .
                     'MIME-Version: 1.0' . "\r\n" .
                     'Content-type: text/html; charset=utf-8';
         if(mail($to, $subject, $message, $headers))
             echo "Email sent";
         else
             echo "Email sending failed";
             ?>
   </body>
</html>