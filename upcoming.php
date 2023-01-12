<?php
session_start();
include('cgmdbconnection.php');  

    if(isset($_POST['submitevent'])){
        $image = $_FILES['image'];
        print_r($_FILES['image']);
        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
        $img_des ="upload/" .$img_name;
        move_uploaded_file($img_loc,'upload/'.$img_name);


        $title = $_POST['title'];
        $des = $_POST['des'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $loc = $_POST['loc'];
        $chapter = $_POST['chapter'];

        $query = "INSERT INTO upcoming (`title`, `image`, `des`, `date`, `time`, `loc`, `cgm_id`) VALUES ('$title',' $img_des','$des','$date','$time','$loc', '$chapter')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Post Successfully";
            $_SESSION['status-code'] = "success";
            header("location:uploadevent.php?chapter=$chapter");
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header("location:uploadevent.php?chapter=$chapter");
        }

    }
?>