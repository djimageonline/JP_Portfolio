
<?php
// Get data from form
$mail_host = "johnnyproano.com"; 
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$email= $_POST['email'];
$message= $_POST['message'];
 
$to = "jproano22@yahoo.com";
$subject = "New Form Submission from Dev Site";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="First Name = ". $firstname . "\r\n Last Name = ". $lastname . "\r\n   Email = ". $email . "\r\n Message =" . $message;
 
$headers = "From: $email" . "\r\n" .;
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:index.html");
?>