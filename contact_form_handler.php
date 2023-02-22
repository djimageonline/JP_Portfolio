
<?php
$errors = '';
$myemail = 'jproano22@yahoo.com';//<-----Put Your email address here.

$fullname = $_POST['full-name'];
$email = $_POST['email']; 
$message = $_POST['message']; 


$to = $myemail;

$email_subject = "Contact form submission: $fullname ";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $fullname \n ".

"Email: $email\n Message \n $message";

$headersFrom = "From: $myemail\n";

$headersTo .= "Reply-To: $email";

mail($to,$email_subject,$email_body,$headersFrom, $headersTo);

//redirect to the 'thank you' page

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>
';


?>