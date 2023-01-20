
<?php
$errors = '';
$myemail = 'jproano22@yahoo.com';//<-----Put Your email address here.
if(empty($_POST['first-name'])  ||
   empty($_POST['last-name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$firstname = $_POST['first-name'];
$lastname = $_POST['last-name']; 
$email = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
  "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email))
{
    $errors .= "\n Error: Invalid email address";
}

// Get data from form
// $mail_host = "johnnyproano.com"; 

if( empty($errors))

{

$to = $myemail;

$email_subject = "Contact form submission: $firstname $lastname ";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $firstname $lastname\n ".

"Email: $email\n Message \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header('Location: contact-form-thank-you.html');

}