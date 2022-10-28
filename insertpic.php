<?php
session_start();
    $con = mysqli_connect('localhost','root','','cgm');    

    if(isset($_POST['submitpic'])){
        $image = $_FILES['image'];
        print_r($_FILES['image']);
        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
        $img_des ="upload/" .$img_name;
        move_uploaded_file($img_loc,'upload/'.$img_name);

        $image = $_FILES['img'];
        print_r($_FILES['img']);
        $img_loc = $_FILES['img']['tmp_name'];
        $img_name = $_FILES['img']['name'];
        $img ="upload/" .$img_name;
        move_uploaded_file($img_loc,'upload/'.$img_name);

        $image = $_FILES['pic'];
        print_r($_FILES['pic']);
        $img_loc = $_FILES['pic']['tmp_name'];
        $img_name = $_FILES['pic']['name'];
        $pic ="upload/" .$img_name;
        move_uploaded_file($img_loc,'upload/'.$img_name);

        $image = $_FILES['photo'];
        print_r($_FILES['photo']);
        $img_loc = $_FILES['photo']['tmp_name'];
        $img_name = $_FILES['photo']['name'];
        $photo ="upload/" .$img_name;
        move_uploaded_file($img_loc,'upload/'.$img_name);

        

        $query = "INSERT INTO home (`image`, `img`, `pic`, `photo`) VALUES (' $img_des', '$img', '$pic', '$photo')";
        $query_run = mysqli_query($con,$query);
    
        if ($query_run){
            header('location:insertpic.php');
        }


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="file" name="img">
        <input type="file" name="pic">
        <input type="file" name="photo">
        <input type="submit" name="submitpic" value="POST">
    </form>
</body>
</html>