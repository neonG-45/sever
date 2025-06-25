<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname =($_POST['fname']);
    $email =($_POST['email']);
    $phone =($_POST['phone']);
    $subjects =($_POST['subjects']);
    $messages =($_POST['messages']);
    #$from='wecare@healthcenter.com';
    $to ='necromking@gmail.com'; 
    $subject='CONTACT FORM';
     $headers= "From: $to \r\n" ;
    $headers.= "Reply-To: $to \r\n";
          $body = "Name: $fname\n".
     "Email: $email\n".
     " Phone: $phone\n".
       "Subjects: $subjects\n".
      "Message:$messages \n";
    if (mail($to,$subject,$body,$headers)) {
        echo "Thank you for contacting us, $fname. We will get back to you shortly.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>