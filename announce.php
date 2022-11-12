<?php
session_start();
include('cgmdbconnection.php');    

    if(isset($_POST['submitannounce'])){
        $image = $_FILES['img'];
        print_r($_FILES['img']);
        $img_loc = $_FILES['img']['tmp_name'];
        $img_name = $_FILES['img']['name'];
        $img ="upload/" .$img_name;
        move_uploaded_file($img_loc,'upload/'.$img_name);


        $chap = $_POST['cgmchapter'];
        $anntitle = $_POST['announceTitle'];
        $caption = $_POST['caption'];

        $query = "INSERT INTO announcement (`img`, `cgmchapter`, `announceTitle`, `caption`) VALUES ('$img','$chap','$anntitle','$caption')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Post Successfully";
            $_SESSION['status-code'] = "success";
            header('location:uploadevent.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:uploadevent.php');
        }

    }
?>