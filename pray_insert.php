<?php
session_start();
    $con = mysqli_connect('localhost','root','','cgm');

    if(isset($_POST['praysubmit'])){
        $cgmchapter = $_POST['cgmchapter'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $request = $_POST['request'];
        $report = $_POST['report'];

        $query = "INSERT INTO prayer (`cgmchapter`, `name`, `email`, `request`, `report`) VALUES ('$cgmchapter','$name','$email','$request','$report')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Sent Successfully";
            $_SESSION['status-code'] = "success";
            header('location:prayer.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:prayer.php');
        }
    }
?>