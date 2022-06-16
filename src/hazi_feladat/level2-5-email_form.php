<?php

// a.com    --->  b.com
//  ⬆️               ⬇️ 
// a@a.com        b@b.com   

// php   --->    b.com
//                  ⬇️ 
//               b@b.com


// a.com    --->  b.com
//  ⬆️               ⬇️ 
// a@a.com        b@b.com
//  ⬆️ 
// php

require __DIR__ . '/../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/**
* @psalm-suppress UndefinedVariable
*/
function process_form() :void {

  $email_text = "Hey, someone filled out the form at $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI] \r\n\n";
  foreach($_POST as $label => $value) {
    if($label !== 'submit') {
      // létrehoz egy változót azzal a névvel ami a $label
      ${$label}    = $value;
      $email_text .= ucfirst($label) . ': ' . $value . "\r\n";
    }
  }


  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.prompt.hu';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'webdream@prompt.hu';                     //SMTP username
    $mail->Password   = 'aejhaRaK_FRP3';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('webdream@prompt.hu', 'Mailer');
    $mail->addAddress('zsolt.lengyel21@gmail.com', 'Lengyel Zsolt');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Form submission from '. $name;
    $mail->Body    = $email_text;

    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

}



?>
<!DOCTYPE html>
<html>
  <head>
    <title>Email Form</title>
    <meta name="author" value="Joe Casabona" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <?php
      if (isset($_POST['submit'])) {
        process_form();
      }
      ?>
      <form name="contact" method="POST">
        <div>
          <label for="name">Name:</label>
          <input type="text" name="name" placeholder="What's Your Name?" />
        </div>
        <div>
          <label for="email">Email:</label>
          <input type="email" name="email" placeholder="What's Your Email?" />
        </div>
        <div>
          <label for="message">Your Message:</label>
          <textarea name="message"></textarea>
        </div>
        <div><input type="submit" name="submit" value="Send Message" /></div>
      </form>
    </main>
  </body>
</html>
