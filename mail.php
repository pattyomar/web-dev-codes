<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Subject: $subject \n Message: $message";
$recipient = "info@patriciaomaroro.co.ke";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='https://www.patriciaomaroro.co.ke/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
