<?php
session_start();
include('cgmdbconnection.php');  

    if(isset($_POST['add'])){
    
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        $chapter = $_POST['chapter'];


        $query = "INSERT INTO admin (`username`, `password`, `level`, `cgm_id`) VALUES ('$username', '$password', '$level', '$chapter')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Post Successfully";
            $_SESSION['status-code'] = "success";
            header("location:admin2.php");
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header("location:admin2.php");
        }

    }
?>