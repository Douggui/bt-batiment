<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  //$receiving_email_address = 'contact@example.com';

  /*if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);
*/
$email=$_POST['email'];
$works=$_POST['works'];
$message=$_POST['message'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$subject='demande de devis en ligne';
$to='narjes.dougui@gmail.com';
  $subject='demande de devis';
  $headers = "FROM: $email " . "\r\n" .
  'Reply-To: no-reply@gmail.com' . "\r\n" .
  'Content-type:text/html;charset=utf-8' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  $email = "<div style='background-color:yellow;'>
  <p>vous avez recu une demande de devis de la part de $firstName $lastName email: $email</p>
  <p>Nature des traveaux : $works</p>
  <p>message : $message</p>
   ";



 if(mail($to, $subject,$email,$headers)){
    echo 'J\'ai bien réçu votre email,je vous répond dans les plus bref délai';
 }else{
    echo 'Mail en echec, me contacter directement : narjes.dougui@gmail.com';
 }
 
?>