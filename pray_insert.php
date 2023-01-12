<?php
session_start();
include('cgmdbconnection.php');

    if(isset($_POST['praysubmit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $request = $_POST['request'];
        $report = $_POST['report'];
        $chapter = $_POST['chapter'];


        $select = "SELECT * FROM chapter WHERE id = $chapter";
        $select_run = mysqli_query($con, $select);
        $row = mysqli_fetch_array($select_run);
        $cgmchapter = $row['cgmchapter'];

        $query = "INSERT INTO prayer (`name`, `email`, `request`, `cgmchapter`, `cgm_id`, `report`) VALUES ('$name','$email','$request', '$cgmchapter', '$chapter', '$report')";
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