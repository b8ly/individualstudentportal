<? 
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = '2024988509@student.uitm.edumy';

    $email_subject = 'New Form Submission';

    $email_body = "User Name : $name .\n".
                    "User email : $visitor_email.\n".
                   "Subject : $subject.\n".
                   "User Message : $message .\n";

    $to = 'ainbalqiszulceple@gmail.com';

    $header = "From : $email_from \r\n ";

    $header.= "Reply-To :  $visitor_email \r\n";

    mail($to,$email,$email_body,$header);

    header("Location : contact.html");
?>