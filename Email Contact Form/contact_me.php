<?php
/**
 * Created by PhpStorm.
 * User: Richard L33
 * Date: 4/20/15
 * Time: 1:26 PM
 */

if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW TO SEND TO EMAIL AND ENTER SUBJECT LINE

    $email_to = " <-- YOUR EMAIL -->";

    $email_subject = "Email Form";



    $fullname = $_POST['fullname']; // required

    $company = $_POST['company']; // not required

    $email = $_POST['email']; // required

    $phone = $_POST['phone']; // not required

    $message = $_POST['message']; // not required



    $email_message = "Form details below.\n\n";



    function clean_string($string) {

        $bad = array("content-type","bcc:","to:","cc:","href");

        return str_replace($bad,"",$string);

    }



    $email_message .= "Full Name: ".clean_string($fullname)."\n";

    $email_message .= "Company: ".clean_string($company)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Phone: ".clean_string($phone)."\n";

    $email_message .= "Message: ".clean_string($message)."\n";


// CREATE EMAIL HEADERS

// $headers = 'From: '.$email."\r\n".

    'Reply-To: '.$email."\r\n" .

    'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);

?>