<?php
   
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $msg = $_POST['message']; // Get Message Value
         
        $to = "ch.cassani@gmail.com"; // You can change here your Email
        $subject = "'$name' has been sent a mail"; // This is your subject
        $body= "this is test email";

mail ($to,$subject,$body);
echo "Message sent !" ;
       
