<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    // get data from contact form
    // if (isset($_POST['contact'])){
    //     if(isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['message'])){
    //         // Check for empty fields
    //         if(empty($_POST['name'])      ||
    //             empty($_POST['email'])     ||
    //             empty($_POST['message'])   ||
    //             !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    //             {
    //             echo "No arguments Provided!";
    //             return false;
    //         }
            
    //         // defining variables    
    //         $name = strip_tags(htmlspecialchars($_POST['name']));
    //         $email_address = strip_tags(htmlspecialchars($_POST['email']));
    //         $message = strip_tags(htmlspecialchars($_POST['message']));
                
    //         // Creating the email and sending the message
    //         $to = 'info@helpachildfoundation.org'; // This is where the form will send a message to.
    //         $email_subject = "Help A Child Foundation Contact Form:  $name";
    //         $email_body = "You have received a new message from Help A Child Foundation Contact Form contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
    //         $headers = "From: noreply@helpachildfoundation.org\n"; // This is the email address the generated message will be from.
    //         $headers .= "Reply-To: $email_address";   

            //create mail object
            $mail = new PHPMailer(true);
              try {
                  //Server settings
                  $mail->SMTPDebug = 2;                                       // Enable verbose debug output
                  $mail->isSMTP();                                            // Set mailer to use SMTP
                  $mail->Host       = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
                  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                  $mail->Username   = 'helpachild24@gmail.com';              // SMTP username
                  $mail->Password   = 'help@child';                         // SMTP password
                  $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
                  $mail->Port       = 465;                                    // TCP port to connect to

                  //Recipients
                  $mail->setFrom('helpachild24@gmail.com', 'HelpAChild Foundation');
                  $mail->addReplyTo('helpachild24@gmail.com', 'HelpAChild Foundation');
                  $mail->AddAddress('bindas.fs@gmail.com');
                  // Content
                  $mail->isHTML(true);                                  // Set email format to HTML
                  $mail->Subject = 'Message From HelpAChild Foundation';
                  $mail->Body    = 'Bindas testing the HelpAChild Foundation mail server!';
                  
                  //calling mail method
                  $mail->send();
                  die();
              } catch (Exception $e) {
                  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                  die();
              }
            header ("location: google.com"); // returns back to contact page
    //     }
    // }
?>