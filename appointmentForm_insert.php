<?php
session_start();
    $con = mysqli_connect('localhost','root','','cgm');

    if(isset($_POST['sendappoint'])){
        $date = $_POST['date'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $time = $_POST['time'];
        $address = $_POST['address'];
        $service = $_POST['service'];
        $cgmchapter = $_POST['cgmchapter'];
        $message = $_POST['message'];
        $room = $_POST['room_id'];
        

        $query = "INSERT INTO `appointment`(`date`, `fullname`, `email`, `contact`, `time`, `address`, `service`, `cgmchapter`, `message`, `room_id`) VALUES ('$date','$fullname','$email','$contact','$time','$address', '$service','$cgmchapter', '$message', '$room')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Sent Successfully";
            $_SESSION['status-code'] = "success";
            header('location:appointmentform.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:appointmentform.php');
        }
    }
?>