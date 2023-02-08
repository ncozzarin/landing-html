<?php
if(isset($_POST['submit'])) {
  $to = "nicolasjcozzarin@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['_replyto'];
  $message = $_POST['message'];
  $subject = "New Form Submission";
  $headers = "From: $email";
  mail($to, $subject, $message, $headers);
  header("Location: index.html");
}
?>