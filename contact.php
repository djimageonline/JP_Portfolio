
<?php
// Get data from form
// $mail_host = "johnnyproano.com"; 
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$email= $_POST['email'];
$message= $_POST['message'];
 
$subject = "New Form Submission from Dev Site";
$to = "jproano22@yahoo.com";

$txt ="First Name = ". $firstname . "\r\n Last Name = ". $lastname . "\r\n   Email = ". $email . "\r\n Message =" . $message;
 
$headers = "From: $to \r\n";
$headers .= "Reply-To: $email \r\n";

mail($to, $subject, $txt, $headers);


// Redirect to
header("Location: index.html");
?>