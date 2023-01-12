<?php
session_start();
include('cgmdbconnection.php');

    if(isset($_POST['submitattend'])){
        $chapter = $_POST['chapter'];
        $date = $_POST['date'];
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $contactnumber = $_POST['contactnumber'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $select = "SELECT * FROM chapter WHERE id = $chapter";
        $select_run = mysqli_query($con, $select);
        $row = mysqli_fetch_array($select_run);
        $cgmchapter = $row['cgmchapter'];
        	$id = $row['id'];

        $query = "INSERT INTO attendance (`cgmchapter`, `cgm_id`, `date`, `fullname`, `gender`, `contactnumber`, `age`, `address`) VALUES ('$cgmchapter', '$id', '$date','$fullname','$gender','$contactnumber','$age','$address')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Sent Successfully";
            $_SESSION['status-code'] = "success";
            header("location:attendance.php?chapter=$chapter#attendance");
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header("location:attendance.php?chapter=$chapter#attendance");
        }
    }
?>