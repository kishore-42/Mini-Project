<?php
$name=$_POST['fname'];
$visitor_email=$_POST['femail'];
$message=$_POST['fmess'];

$email_from='IndianDemography.com';

$email_subject='New Query Submission';

$email_body= "user name: $name.\n";
             "user email: $visitor_email.\n";
             "user message: $message.\n";


$to ="IndianDemography@gmail.com";

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>