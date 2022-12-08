
<?php
// Get data from form 
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$email= $_POST['email'];
$message= $_POST['message'];
 
$to = "jproano22@yahoo.com";
$subject = "You got an email from your Dev Site";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="First Name = ". $firstname . "\r\n Last Name = ". $lastname . "\r\n   Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:index.html");
?>