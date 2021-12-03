<!DOCTYPE html>
<html>
<body>

<h1>Welcome Email</h1>

<p>Please check your email :)</p>

<?php
$to      = 'f32ee@localhost';
$subject = 'WELCOME EMAIL';
$message = 'Thank you for signing up for the caviarie newsletter!';
$headers = 'From: f32ee@localhost' . "\r\n" .
    'Reply-To: f32ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff32ee@localhost');
echo ("mail sent to : ".$to);
?> 

</body>
</html>