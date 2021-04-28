<?php

    // making variables
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    // emailing from our second email ID
    $email_from = '2017164@iiitdmj.ac.in';

    $email_subject = "New Form Submission";

    $email_body = "User Email - $visitor_email./n";
                    "User Message - $message./n";


    // receiving email details
    $to = 'nishantprashantbsw@gmail.com';

    $headers = "From: $email_from /r/n";

    $headers .= "Reply-To: $visitor_email /r/n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");








?>