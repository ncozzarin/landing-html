<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "hola";
var_dump($_POST);
if(isset($_POST['submit'])){
    echo "hola";
    $to = "nicolas.cozzarin@swissds.ch"; // this is the email address you want to send the form to
    $from = $_POST['email']; // this is the sender's email address
    $name = $_POST['name'];
    $subject = "New message from your website";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    if(mail($to,$subject,$message,$headers)){
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    } else {
        echo "There was an error sending the email.";
    }
}
?>