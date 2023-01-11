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
    " in Room #" . $row['room_id'] . " on " . date('F j, Y', strtotime($row['date'])) . " " . $row['time'] . " is now confirmed.";


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
    " in Room #" . $row['room_id'] . " on " . date('F j, Y', strtotime($row['date'])) . " " . $row['time'] . " is rejected. Please book an appointment again with complete details.";


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

if (isset($_POST['confirm_prayer'])) {
    $con_id = $_POST['confirm_id'];

    $select = "SELECT * FROM prayer WHERE id ='$con_id'";
    $select_run = mysqli_query($con, $select);
    $row = mysqli_fetch_array($select_run);


    $email_sender = 'cgmchurchweb@gmail.com';
    $name_sender = 'CGM Church';

    $email = $row["email"];
    $fullname = $row["name"];
    
    $subject = "Thank you for your prayer request!";
    $message = "Thank you for contacting Church of God's Miracles with your prayer request. We consider it a privilege to stand in agreement with you about your prayer needs. God answers prayer!";


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


    $update = "UPDATE prayer SET status = 'Confirmed' WHERE id = '$con_id'";
    $update_run = mysqli_query($con, $update);
}

if(isset($_POST['sendappoint'])){
        
    $date = $_POST['date'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $time = $_POST['time'];
    $address = $_POST['address'];
    $service = $_POST['service'];
    $cgm_id = $_POST['chapter'];
    $message_post = $_POST['message'];

    $for_chaptername = "SELECT * FROM `chapter` WHERE id = $cgm_id";
    $for_chaptername_run = mysqli_query($con, $for_chaptername);
    $rows = mysqli_fetch_array($for_chaptername_run);
    $chapter_name = $rows['cgmchapter'];


    $email_sender = 'cgmchurchweb@gmail.com';
    $name_sender = 'CGM Church';

    
    $subject = "New Appointment Reservation";
    $message = "A new client just sent an appointment reservation. Please check the details and confirm the appointment reservation. Thank You.
                \n Details: 
                Date: " . date('F j, Y', strtotime($date)). " 
                Name: " . $fullname . " 
                Email: " . $email . "
                Contact Number: " . $contact . "
                Time: " . $time . "
                Service: " . $service . "
                Chapter: " . $chapter_name . "
                Message: " . $message_post;


    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";

    $mail->Username = "cgmchurchweb@gmail.com";
    $mail->Password = "pfzfomvzlzfwkebz";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($email_sender, $name_sender);

    $mail->addAddress($email_sender, $name_sender);
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();



    $query = "INSERT INTO `appointment`(`date`, `fullname`, `email`, `contact`, `time`, `address`, `service`, `cgmchapter`, `cgm_id`, `message`) VALUES ('$date','$fullname','$email','$contact','$time','$address', '$service','$chapter_name','$cgm_id', '$message_post')";
    $query_run = mysqli_query($con,$query);

    


    if($query_run){
        $_SESSION['status'] = "Sent Successfully";
        $_SESSION['status-code'] = "success";
        header('Location: appointmentform.php?chapter=' . $cgm_id . '&date=' . $date);
 
    }else{
        $_SESSION['status'] = "Something is wrong";
        $_SESSION['status-code'] = "error";
        header('location:appointmentform.php');
    }
}

?>