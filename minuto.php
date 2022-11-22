<?php
session_start();
include('cgmdbconnection.php');  

    if(isset($_POST['submitlimang'])){


        $limang= $_POST['limang'];

        $query = "INSERT INTO limang (`limang`) VALUES ('$limang')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Uploaded Successfully";
            $_SESSION['status-code'] = "success";
            header('location:upload5.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:upload5.php');
        }

    }
?>