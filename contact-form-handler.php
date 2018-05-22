<?php
     $name =  $_POST['name'];
     $visitor_email = $_POST['email'];
     $message = $_POST['message'];

     $email_from = 'mdabuomayed44@gmail.com';

     $email_subject ="New form submission";

     $email_body = "user name: $name.\n".
                     "user email: $visitor_email.\n".
                       "user message: $message.\n";

     $to = "abuomayedwebpage@gmail.com";

     $headers = "From: $email_from \r\n";

     $headers = "Reply_To: $visitor_email \r\n";

     mail($to,$email_subject,$email_body,$headers);

     header("Location:sms.html");                  


?>