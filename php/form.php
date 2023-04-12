<?php
if(isset($_POST['submit'])){
    $to = "nicolasjcozzarin@gmail.com"; // this is the email address you want to send the form to
    $from = $_POST['email']; // this is the sender's email address
    $name = $_POST['name'];
    $subject = "New message from your website";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
}
?>