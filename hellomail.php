<!DOCTYPE html>
<html>
<body>

<h1>Hello!</h1>

<p>Customer Order Details</p>

<?php
$to      = 'f32ee@localhost';
$subject = 'Hooray! Your order has been received!';
$message = 'Dear Customer, Your order has been confirmed! Thank you for shopping with Caviarie. Your order will be processed in 3-5 business days. Follow us on Instagram @caviarie for behind the scenes, latest launches, promotions & be inspired!';
$headers = 'From: f32ee@localhost' . "\r\n" .
    'Reply-To: f32ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff32ee@localhost');
echo ("mail sent to : ".$to);
?> 

</body>
</html>