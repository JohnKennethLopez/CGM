<?php
session_start();
include('cgmdbconnection.php');
$dibconfig = mysqli_select_db($con,'cgm');


require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;



if (isset($_POST['confirm_btn_set'])) {
    $con_id = $_POST['confirm_id'];

    $select = "SELECT * FROM appointment WHERE id ='$con_id'";
    $select_run = mysqli_query($con, $select);
    $row = mysqli_fetch_array($select_run);


    $email_sender = 'cgmchurchweb@gmail.com';
    $name_sender = 'CGM Church';

    $email = $row["email"];
    $fullname = $row["fullname"];
    
    $subject = "Appointment Confirmed";
    $message = "Good day, " . $row['fullname'] . ". Your appointment to " . $row['cgmchapter'] . " for the service of " . $row['service'] .
    " in Room #" . $row['room_id'] . " on " . $row['date'] . " " . $row['time'] . " is now confirmed.";


    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";

    $mail->Username = "cgmchurchweb@gmail.com";
    $mail->Password = "pfzfomvzlzfwkebz";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($email_sender, $name_sender);

    $mail->addAddress($email, $fullname);
    $mail->Subject = "Appointment Confirmed";
    $mail->Body = $message;

    $mail->send();


    $update = "UPDATE appointment SET status = 'Confirmed' WHERE id = '$con_id'";
    $update_run = mysqli_query($con, $update);
}

if (isset($_POST['reject_btn_set'])) {
    $reject_id = $_POST['reject_id'];


    $select = "SELECT * FROM appointment WHERE id ='$reject_id'";
    $select_run = mysqli_query($con, $select);
    $row = mysqli_fetch_array($select_run);


    $email_sender = 'cgmchurchweb@gmail.com';
    $name_sender = 'CGM Church';

    $email = $row["email"];
    $fullname = $row["fullname"];
    
    $subject = "Appointment Rejected";
    $message = "Good day, " . $row['fullname'] . ". Your appointment to " . $row['cgmchapter'] . " for the service of " . $row['service'] .
    " in Room #" . $row['room_id'] . " on " . $row['date'] . " " . $row['time'] . " is rejected. Please book an appointment again with complete details.";


    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";

    $mail->Username = "cgmchurchweb@gmail.com";
    $mail->Password = "pfzfomvzlzfwkebz";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($email_sender, $name_sender);

    $mail->addAddress($email, $fullname);
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();

    
    $update = "UPDATE appointment SET status = 'Rejected' WHERE id = '$reject_id'";
    $update_run = mysqli_query($con, $update);
}


?>