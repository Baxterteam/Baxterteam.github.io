<?php 
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$message = $_POST["message"];


$email_from = "info@yourwebsite.com";
$email_subject = "new form submission" ;
$email_body = "User Name: $name.\n". 
              "User Email: $visitor_email.\n". 
              "User Messege: $messege .\n". ;
$to = "lybotics0baxterteam@gmail.com"
$headers = "From: $email_from  \r\n";
$headers .= "Replay-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);
header("location: contact us.html");
?>