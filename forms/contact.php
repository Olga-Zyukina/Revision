<?php

$to = 'spiridonova_o@mail.ru';
$from = trim($_POST['email']);

$subject = htmlspecialchars($_POST['subject']);
$subject = urldecode($_POST['subject']);
$subject = trim($_POST['subject']);
$message = htmlspecialchars($_POST['message']);
$headers = "From: $from" . "\r\n" .
"Reply-To: $from" . "\r\n" .
"X-Mailer: PHP/" . phpversion(); 

mail($to, $subject, $message, $headers)
exit();

	?>

