<?php
session_start();
    $con = mysqli_connect('localhost','root','','cgm');    

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

        $query = "INSERT INTO upcoming (`title`, `image`, `des`, `date`, `time`, `loc`) VALUES ('$title',' $img_des','$des','$date','$time','$loc')";
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