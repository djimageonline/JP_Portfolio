
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
<title>Johnny Proano</title>
<meta charset="utf-8">
<meta name="author" content="Johnny Proano">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<link href="styles.css" rel="stylesheet" type="text/css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Bangers&family=Didact+Gothic&family=Indie+Flower&display=swap" rel="stylesheet">

<script src="https://unpkg.com/scrollreveal"></script>
<script>
    ScrollReveal({ reset: true });
</script>
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