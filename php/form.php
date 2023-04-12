<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['name']) && isset($_POST['_replyto']) && isset($_POST['message'])) {

    $to = "nicolasjcozzarin@gmail.com"; // this is the email address you want to send the form to
    $from = $_POST['_replyto']; // this is the sender's email address
    $name = $_POST['name'];
    $subject = "New message from your website";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    if(mail($to,$subject,$message,$headers)){
        echo "<script>alert('Mail Sent. Thank you, we will contact you shortly.');</script>";
    } else {
        echo "There was an error sending the email.";
    }
}
?>