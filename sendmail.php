<?php
// Post Data	
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);
$message = strip_tags($_POST['message']);


// Send Message
mail("rajujorhat46@gmail.com", "vdorite Customer Feedback  ",
"Customer Name: $name\n
E-mail Id: $email\n
Phone Number: $phone\n 
Message: $message\n",
"From: Forms <Vdorite Contact Form>");
header("Location:success.html?msg=Your Message Send Successfully!!");
?>