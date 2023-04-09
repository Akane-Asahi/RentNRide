<?php
// Include PHPMailer library
require_once "PHPMailer.php";
require_once "SMTP.php";
require_once "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer object
$mail = new PHPMailer();

// Set the SMTP settings for Zoho
$mail->isSMTP();
$mail->Host = 'smtp.zoho.com';
$mail->SMTPAuth = true;
$mail->Username = 'info@rentnride.com.bd'; // Replace with your email
$mail->Password = 'Zaib990995#'; // Replace with your Zoho email password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set the email message
$email = $_POST['email'];
$car_name = $_POST['carname'];
$duration = $_POST['duration'];
$price = $_POST['price'];
$message = $_POST['message'];

$mail->setFrom($email);
$mail->addAddress($email);
$mail->isHTML(true);
$mail->Subject = 'New Car Rental Request';
$mail->Body = "
<html>
<head>
  <title>New Car Rental Request</title>
  <style>
    <style>
			body {
				font-family: Arial, sans-serif;
			}
			h1 {
				color: #336699;
			}
			table {
				border-collapse: collapse;
			}
			td {
				padding: 10px;
				border: 1px solid #ddd;
			}
			.logo {
				max-width: 200px;
			}
		</style>
  </style>
</head>
<body>
  <img src='logo.png' alt='Rent N Ride' />
  <h1>New Car Rental Request</h1>
  <p><strong>Car Name:</strong> $car_name</p>
  <p><strong>Duration:</strong> $duration</p>
  <p><strong>Price:</strong> $price</p>
  <p><strong>Message:</strong> $message</p>
</body>
</html>
";

// Send the email
if($mail->send()) {
    echo "Email sent successfully!";
} else {
    echo "Error: " . $mail->ErrorInfo;
}
?>