<?php 
if (isset($_POST['send_message_btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];
  
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1>" . $subject . "</h1>
  	<p>".$msg."</p>
  </body>
  </html>";
  if (mail('website_owner@example.com', $subject, $message, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
}
?>
<?php
  mail("receiver@example.com","My subject","Hey there! How you doin'");

  bool mail ( string $to , string $subject , string $message, string $headers )

  $message = wordwrap($message, 70);


?>

