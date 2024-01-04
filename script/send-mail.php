<?php 

if (!empty($_POST)) {
   $name = $_POST['c_name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
  
   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($subject)) {
    $errors[] = 'subject is empty';
}

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }

   if (empty($errors)) {
    $toEmail = 'info@securecare.com';
    $emailSubject = $subject;
    $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
    $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);

    if (mail($toEmail, $emailSubject, $body, $headers)) {

        $errorMessage = 'Done';
        // header('Location: ../thank-you');
        
    } else {
        $errorMessage = 'Oops, something went wrong. Please try again later';
    }

}
}

?>