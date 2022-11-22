<?php
session_start();
include('cgmdbconnection.php');  

    if(isset($_POST['submitmanna'])){


        $manna= $_POST['manna'];

        $query = "INSERT INTO manna (`manna`) VALUES ('$manna')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Uploaded Successfully";
            $_SESSION['status-code'] = "success";
            header('location:uploadmanna.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:uploadmanna.php');
        }

    }
?>