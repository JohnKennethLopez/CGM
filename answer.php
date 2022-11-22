<?php
session_start();
include('cgmdbconnection.php');  

    if(isset($_POST['submitanswer'])){


        $answer= $_POST['answer'];

        $query = "INSERT INTO answer (`answer`) VALUES ('$answer')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Uploaded Successfully";
            $_SESSION['status-code'] = "success";
            header('location:uploadanswer.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:uploadanswer.php');
        }

    }
?>