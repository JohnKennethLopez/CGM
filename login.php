<?php
include('cgmdbconnection.php');

session_start();

if (isset($_POST['username']) && isset ($_POST['password'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)){
        header("location: admin.php?error=username is required");
        exit();
    }else if (empty($password)){
        header("location: admin.php?error=password is required");
        exit();
    }else{
        $sql = "SELECT * FROM admin WHERE username='$username' and password='$password'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['password'] = $row['password'];
            	header('location:admin2.php');
		        exit();
            }else{
				header("Location: admin.php?error=Incorrect Username or Password");
                echo '<script>Incorrect Username or Password</script>';
		        exit();
			}
		}else{
			header("Location: admin.php?error=Incorrect Username or Password");
            echo '<script>Incorrect Username or Password</script>';
	        exit();
		}
	}
}else{
    header("location: index.php");
    exit();
}

