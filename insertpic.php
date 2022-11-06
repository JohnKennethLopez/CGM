<?php
session_start();
    $con = mysqli_connect('localhost','root','','cgm');    

    if(isset($_POST['submitpic'])){
    

        $image = $_FILES['photo'];
        print_r($_FILES['photo']);
        $img_loc = $_FILES['photo']['tmp_name'];
        $img_name = $_FILES['photo']['name'];
        $photo ="upload/" .$img_name;
        move_uploaded_file($img_loc,'upload/'.$img_name);

        

        

        $query = "INSERT INTO home4 (`photo`) VALUES ('$photo')";
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

        <input type="file" name="photo">
    
        <input type="submit" name="submitpic" value="POST">
    </form>
</body>
</html>