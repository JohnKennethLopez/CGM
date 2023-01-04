<?php
session_start();
include('cgmdbconnection.php');

    if(isset($_POST['submitattend'])){
        $cgmchapter = $_POST['cgmchapter'];
        $date = $_POST['date'];
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $contactnumber = $_POST['contactnumber'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $query = "INSERT INTO attendance (`cgmchapter`, `date`, `fullname`, `gender`, `contactnumber`, `age`, `address`) VALUES ('$cgmchapter','$date','$fullname','$gender','$contactnumber','$age','$address')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Sent Successfully";
            $_SESSION['status-code'] = "success";
            header('location:attendance.php#attendance');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:attendance.php#attendance');
        }
    }
?>