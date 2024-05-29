<?php
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "threef";

session_start();
//var_dump($_SESSION['userid']); 
// Get the room number from the query parameter
$roomNumber = $_GET["roomNumber"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
$sql = "UPDATE hostel SET RoomAvl='Occupied' WHERE RoomNumber='$roomNumber'";
$userid = $_SESSION['userid'];
$sql1 = "insert into bookrooms (User_ID, Room_Number) values ('$userid','$roomNumber')";
// $conn->query($sql1);
// $conn->error;
if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
    // Send confirmation email using PHPMailer
    $to = $_GET["email"];
    $subject = "Room Booking Confirmation";
    $message = "Thank you for booking room number $roomNumber. Your booking is confirmed!";

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();  // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Your SMTP host
    $mail->SMTPAuth = true;   // Enable SMTP authentication
    $mail->Username = 'ornateyours@gmail.com'; // Your SMTP username
    $mail->Password = 'SauravSajidSalmanShuvo'; // Your SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption
    $mail->Port = 587; // SMTP port

    $mail->setFrom('ornateyours@gmail.com', 'Saurav');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        echo "Room availability and pet type updated successfully";
    } else {
        echo "Error sending email: " . $mail->ErrorInfo;
    }
} else {
    echo "Error updating room availability and pet type: " . $conn->error;
}


// Close connection
$conn->close();
